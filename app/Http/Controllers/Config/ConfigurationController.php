<?php

namespace App\Http\Controllers\Config;

use App\Models\{Service, Calendar};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigurationController extends Controller
{
	public function redirectByLanguage(Request $request)
	{
		$currentLanguage = app()->getLocale();
		$language = $request->get('lang');
		## Language available: ES, EN
		app()->setLocale($language);

		$referer = request()->headers->get('referer');
		$host = $request->getSchemeAndHttpHost();

		$route = str_replace($host, '' , $referer);
		$segments = explode('/',$route);

		$segments[1] = $language;

		if (count($segments) == 4) {
			$dynamic = $this->dynamicRoutes($segments , $language);
			$segments[3] = $dynamic;
		}

		$route = implode('/',$segments);
		$newReferer = $host.$route;
//		$referer = str_replace($currentLanguage, $language, $referer);

		return response()->json($newReferer);
	}

	public function dynamicRoutes($segments, $language)
	{
		$service = Service::whereTranslation('slug', $segments[3])->first();

		if ($service) {
			$traduccion = $service->getTranslation($language, true);
		} else {
			$calendar = Calendar::whereTranslation('slug', $segments[3])->first();
			$traduccion = $calendar->getTranslation($language, true);
		}

		return $traduccion->slug;
	}
}
