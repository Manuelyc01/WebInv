<?php

namespace App\Http\Controllers\Config;

use App\Dictionary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DictionaryController extends Controller
{
    public function index()
    {
        $elements = Dictionary::All();
        return view('admin.dictionary.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.dictionary.create');
    }

    public static function registrar($static_text)
    {
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $dictionary = Dictionary::create([
            'slug' => str_slug($static_text, '-')
        ]);

        $dictionary->translateOrNew($locale)->static_text = $static_text;
        $dictionary->translateOrNew($newLocale)->static_text = $static_text;

        $dictionary->save();
    }

    public function edit(Dictionary $dictionary)
    {
        return view('admin.dictionary.edit', compact('dictionary'));
    }

    public function update(Request $request, Dictionary $dictionary)
    {
        $this->validate(request(), [
            'static_text' => 'required'
        ]);

        $locale = app()->getLocale();

        $dictionary->translateOrNew($locale)->static_text = request('static_text');

        $dictionary->save();

        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('dictionary.index');
    }

    public function destroy($id)
    {
    	Dictionary::destroy($id);
		return redirect()->route('dictionary.index');
    }
}
