<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
	public function setLocale(Request $request)
   	{
   		$selectedLang = request('lang');
   		// dd($selectedLang);
   		if (array_key_exists($selectedLang, config('app.locales'))) {
   			session()->put('locale', $selectedLang);
   		}

   		return redirect()->back();
   	}
}