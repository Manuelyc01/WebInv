<?php

namespace Ems\AdminEms\controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\SeoRoutes;

class SeoController extends Controller
{

    public function index()
    {
        $routes = SeoRoutes::All();
        return view('adminems::seo.index', compact('routes'));
    }

    public function edit(Request $request, $id)
    {
        $seo = SeoRoutes::findOrFail($id);
        return view('adminems::seo.edit', compact('seo'));
    }

    public function update(Request $request, $id)
    {
        $seo = SeoRoutes::findOrFail($id);

        $this->validate(request() , [
            'title' => 'required|max:60',
            'description' => 'required|max:160',
            'social_title' => 'max:60',
            'social_description' => 'max:160',
        ]);

        if ($seo) {
            $seo->fill($request->all());
            $seo->save();

            session()->flash('success' , 'Información actualizada con exito');
            return redirect()->route('seo.index');

        }
    }

    static function checkIfRouteExists($path)
    {

        $seo = SeoRoutes::create([
            'path' => $path
        ]);

        return $seo;

    }
}
