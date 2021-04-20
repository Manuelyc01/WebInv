<?php

namespace Ems\AdminEms\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Admin;
use App\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = Admin::whereHas('role', function($q) use ($id) {
        //     $q->where('code' , '!=' , 1);
        // })->get();
        $users = Admin::where('id', '!=', \Auth::user()->id)->get();
        // dd($users);
        return view('adminems::users.index', compact('users'));
    }

    public function profile() 
    {
        if (\Auth::user()) {
            return view('adminems::users.profile');
        } else {
            return false;
        }
    }

    public function saveProfile (Request $request) {
        
        $auth_user_id = \Auth::user()->id;

        $actual_user = Admin::find($auth_user_id); 
        $actual_user->name = request('name');
        $actual_user->email = request('email');
        
        if ($request->hasFile('image')) {
           $ext = $request->image->getClientOriginalExtension();
           $path = public_path().'/uploads/profile/';
           $image_name = $auth_user_id.'.'.$request->image->extension();
           $request->image->move($path , $image_name);

           $img_path = '/uploads/profile/'.$image_name;
           $actual_user->image = $img_path;
        }
        
        $actual_user->save();

        session()->flash('success' , 'Perfil actualizado!');
        return redirect()->route('user.profile');

    }

    public function changePassword(Request $request) 
    {
        if (\Auth::user()) {

            if ($request->ajax()) {
                //Valores del usuario administrador conectado 
                $actual_password = \Auth::user()->password;
                $actual_id = \Auth::user()->id;

                if (password_verify(request('actual_password') , $actual_password)) {

                    $validator = \Validator::make($request->all(), [
                        'new_password' => 'required|confirmed',
                        'new_password_confirmation' => 'required'
                    ]);

                    if ($validator->passes()) {
                        $user = Admin::find($actual_id);
                        $user->password = bcrypt(request('new_password'));
                        $user->save();
                        return response()->json(['state' => true , 'message' => 'Contraseña actualizada!']);
                    } else {
                        return response()->json(['state' => false , 'message' => 'Verificar la confirmación de la nueva contraseña!']);
                    }
                } 
                else {
                    return response()->json(['state' => false , 'message' => 'La contraseña actual no coincide!']);
                }
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Auth::user()->id == 1 || \Auth::user()->id == 2) {
            $roles = Role::pluck('name', 'id');
            return view('adminems::users.create', compact('roles'));
        }

        return redirect()->route('panel');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:3|max:15',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:4'
        ]);

        Admin::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'role_id' => request('role_id')
        ]);

        session()->flash('success', 'Usuario registrado con éxito!');
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (\Auth::user()->id == 1 || \Auth::user()->id == 2) {
            $user = Admin::find($id);
            $roles = Role::pluck('name', 'id');
            //dd($roles);
            return view('adminems::users.edit', compact('user', 'roles'));
        }

        return redirect()->route('panel');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required|min:3|max:15',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        $user = Admin::find($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->role_id = request('role_id');
        $user->save();

        session()->flash('success', 'Usuario actualizado con éxito!');
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect()->route('usuarios.index');
    }
}
