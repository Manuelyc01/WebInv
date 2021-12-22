<?php

namespace Ems\AdminEms\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Role;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()->id_roles==1|| Auth::user()->id_roles==3){
        $roles = Role::All();
        return view('adminems::role.index', compact('roles'));
    }else{
        return redirect()->route('panel');    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->id_roles==1){
        return view('adminems::role.create');
    }else{
        return redirect()->route('panel');    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->id_roles==1){
        //[{"info":1,"banner":1,"home":1,"sede":1,"nosotros":1,"tradicional":1,"industrial":1,"gestion":1,"bolsas":1,"contactos":1,"selectores":1}]
        $array = ['info' => 0, 'banner' => 0,'banner_clientes' => 0, 'home' => 0, 'sede' => 0, 'nosotros' => 0, 'tradicional' => 0, 'industrial' => 0, 'gestion' => 0, 'bolsas' => 0, 'contactos' => 0, 'selectores' => 0, 'dictionaries' => 0];
        //dd($request->all());
        Role::create([
            'name' => $request->name,
            'permiso' => $array
        ]);

        session()->flash('success' , 'Rol creado con exito');
        return redirect()->route('roles.index');
    }else{
        return redirect()->route('panel');    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->id_roles==1){
        $role = Role::find($id);
        return view('adminems::role.edit', compact('role'));
    }else{
        return redirect()->route('panel');    }
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
        if(Auth::user()->id_roles==1){
        $role = Role::find($id);
        $role->fill($request->all());
        $role->save();

        session()->flash('success' , 'Rol actualizado con exito');
        return redirect()->route('roles.index');
    }else{
        return redirect()->route('panel');    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->id_roles==1){
        Role::destroy($id);

        session()->flash('success' , 'Rol eliminado con exito');
        return redirect()->route('roles.index');
    }else{
        return redirect()->route('panel');    }
    }

    public function permiso(Request $request)
    {
        if(Auth::user()->id_roles==1){
        //dd($request->all());
        $element = Role::find($request->id);
        $array = $element->permiso;
        
        //dd($array);
        if($request->checked == 'true') {
            foreach ($array as $key => $value) {
                if ($request->nom == $key) {
                   
                    $array[$key] = 1;
                   // dd($array[0][$key] );
                }
            }
            $element->permiso = $array;
            $element->save();
        } else if($request->checked == 'false') {
            
            foreach ($array as $key => $value) {
                
                if ($request->nom == $key) {
                   
                    $array[$key] = 0;
                    //dd($array[0][$key] );
                }
            }
            $element->permiso = $array;
            $element->save();
        }
        
        return response()->json($element);
    }else{
        return redirect()->route('panel');    }
    }
}
