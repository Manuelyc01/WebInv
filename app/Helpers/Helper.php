<?php

namespace App\Helpers;

use \Ems\AdminEms\controllers\SeoController;
use App\Http\Controllers\Config\DictionaryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\SeoRoutes;
use Carbon\Carbon;
use App\Dictionary;

class Helper
{

    public static function validUrl($value)
    {
        $url = filter_var($value, FILTER_SANITIZE_URL);

        if (filter_var($value, FILTER_VALIDATE_URL))
            return $value;
        else
            return 'http://'.$value;
    }

    /*
     *************************************************************************************************
     ********************************** HELPERS PARA FECHAS ******************************************
     *************************************************************************************************
     */

    public static function setMonth($month)
    {
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        return $meses[$month];
    }

    public static function actualDate()
    {
        return Carbon::now();
    }

    public static function actualYear()
    {
        return Carbon::now()->format('Y');
    }

    public static function dateFormat($date)
    {
        return Carbon::createFromFormat('d-m-Y', $date);
    }

    public static function latamFormat($date)
    {
        return $date->format('d-m-Y');
    }

    public static function dateSlashFormat($date)
    {
        return Carbon::createFromFormat('d/m/Y', $date);
    }

    public static function dateDifference($first_date, $last_date)
    {
        return $last_date->diffInDays($first_date);
    }

    public static function calculateAge($date)
    {
        return Carbon::createFromDate($date[2], $date[1], $date[0])->diff(Carbon::now())->format('%y');
    }

    //Muestra los meses en letras - Español e Inglés
    //Forma de llamarlo en la view: {{ Helper::mesesEnLetras($item->fecha, 'largoES') }}
    public static function mesesEnLetrasES($fecha, $tipo)
    {
        $day = Carbon::parse($fecha)->day;
        $mes = Carbon::parse($fecha)->month;
        $year = Carbon::parse($fecha)->year;

        $mes_siglas = '';
        $arrayLargoES = [ 1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo', 6 => 'Junio',
                        7 => 'Julio', 8 => 'Agosto',  9 => 'Septiembre',  10 => 'Octubre',  11 => 'Noviembre', 12 => 'Diciembre'];
        $arrayLargoEN = [ 1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June',
                        7 => 'July', 8 => 'August',  9 => 'September',  10 => 'October',  11 => 'November', 12 => 'December'];
        switch($tipo){
            case 'largoES':{
                $mes_siglas = $arrayLargoES[$mes];                
                break;
            }
            case 'cortoES':{
                $mes_siglas = substr($arrayLargoES[$mes], 0, 3);
                break;
            }   
            case 'largoEN':{
                $mes_siglas = $arrayLargoEN[$mes];
                break;
            } 
            case 'cortoEN':{
                $mes_siglas = substr($arrayLargoEN[$mes], 0, 3);
                break;
            }          
        }        
        
        return $day.' '.$mes_siglas.' '.$year;
    }


    /*
     *************************************************************************************************
     ********************************** HELPERS PARA RUTAS *******************************************
     *************************************************************************************************
     */

    public static function generateSeoRoutes()
    {
        $path = \Request::path();
        $route_name = Route::currentRouteName();
        $seo_route = null;

        if (Route::has($route_name)) {
            $seo_route = SeoRoutes::where('path', $path )->first();

            if (!$seo_route) {
                //If the route doesnt exists
                $seo_route = SeoController::checkIfRouteExists($path);
            }
        }

        return $seo_route;
    }

    public static function parseArray($array = array(), $array_columnas = array())
    {
        $new_array = array();
        $tamanio_array = count($array);
        $tamanio_filas_array = count($array[0]);

        for ($i = 0; $i < $tamanio_array; $i++)
        {
            for ($j = 0; $j < $tamanio_filas_array; $j++)
            {
                $valor = $array[$i][$j];
                $new_array[$j][$array_columnas[$i]] = $valor;
            }
        }

        return $new_array;
    }

    public static function dictionary($static_text)
    {
        $slug = str_slug($static_text, '-');

        $existsInDictionary = Dictionary::where('slug', $slug)->first();
        $language = app()->getLocale();

        if ($existsInDictionary) {
            $traduccion = $existsInDictionary->getTranslation($language , true);
            return $traduccion->static_text;

        } else {
            DictionaryController::registrar($static_text);
            return $static_text;
        }
    }

    public static function getIds($collection) {
        $arreglo = array();
        foreach($collection as $element) {
            array_push($arreglo, $element->id);
        }
        return $arreglo;
    }


    /*
     *************************************************************************************************
     ************************************ HELPERS CUSTOM *********************************************
     *************************************************************************************************
     */

    public static function registrarAdm(){
        
    }

}
