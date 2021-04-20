<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Marca, Modelo, Tipo, GestionNivel2, GestionNivel3b, Info};
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

class UtilController extends Controller
{
    public function blogposts(Request $request)
    {
        //dd($request->get('slug'));
        try {
            $client = new Client(); //GuzzleHttp\Client
            $enlaceBlog = Info::first()->enlaceBlog;
            $result = $client->get($enlaceBlog . '/wp-json/wp/v2/posts?category_filter='.$request->get('slug'), []);
            $posts = json_decode($result->getBody());

            foreach ($posts as $key => $value) {
                //dd($value->date);
                $date_split = explode('-',$value->date);
                $mes_tres = '';
                if ($request->get('idioma') == 'es') {
                    if ($date_split[1] == '01') {
                        $mes_tres = 'ENE';
                    }
    
                    if ($date_split[1] == '02') {
                        $mes_tres = 'FEB';
                    }
    
                    if ($date_split[1] == '03') {
                        $mes_tres = 'MAR';
                    }
    
                    if ($date_split[1] == '04') {
                        $mes_tres = 'ABR';
                    }
    
                    if ($date_split[1] == '05') {
                        $mes_tres = 'MAY';
                    }
    
                    if ($date_split[1] == '06') {
                        $mes_tres = 'JUN';
                    }
    
                    if ($date_split[1] == '07') {
                        $mes_tres = 'JUL';
                    }
    
                    if ($date_split[1] == '08') {
                        $mes_tres = 'AGO';
                    }
    
                    if ($date_split[1] == '09') {
                        $mes_tres = 'SEP';
                    }
    
                    if ($date_split[1] == '10') {
                        $mes_tres = 'OCT';
                    }
    
                    if ($date_split[1] == '11') {
                        $mes_tres = 'NOV';
                    }
    
                    if ($date_split[1] == '12') {
                        $mes_tres = 'DIC';
                    }
                } else {
                    if ($date_split[1] == '01') {
                        $mes_tres = 'JAN';
                    }
    
                    if ($date_split[1] == '02') {
                        $mes_tres = 'FEB';
                    }
    
                    if ($date_split[1] == '03') {
                        $mes_tres = 'MAR';
                    }
    
                    if ($date_split[1] == '04') {
                        $mes_tres = 'APR';
                    }
    
                    if ($date_split[1] == '05') {
                        $mes_tres = 'MAY';
                    }
    
                    if ($date_split[1] == '06') {
                        $mes_tres = 'JUN';
                    }
    
                    if ($date_split[1] == '07') {
                        $mes_tres = 'JUL';
                    }
    
                    if ($date_split[1] == '08') {
                        $mes_tres = 'AUG';
                    }
    
                    if ($date_split[1] == '09') {
                        $mes_tres = 'SEP';
                    }
    
                    if ($date_split[1] == '10') {
                        $mes_tres = 'OCT';
                    }
    
                    if ($date_split[1] == '11') {
                        $mes_tres = 'NOV';
                    }
    
                    if ($date_split[1] == '12') {
                        $mes_tres = 'DEC';
                    }
                }

                $value->mes_tres = $mes_tres;
                $value->dia_tres = $date_split[0];
            }

            //dd($posts);
            return response()->json([
                'status' => true,
                'message' => 'Success!',
                'data' => $posts
            ]);
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function setearProductoIndustrialSolicitado(Request $request)
    {
        try {

            session(['solicitaProdIndustrial' => $request->idProductoIndustrial]);
            
            return response()->json([
                'status' => true,
                'message' => 'Success!'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error!',
                'data' => ''
            ]);
        }
    }

    public function buscadorDocumentos(Request $request)
    {
        //dd($request->palabra);
        try {
            $arrayTotal = array();
            $n2 = GestionNivel2::all();
            $n3b = GestionNivel3b::all();
            //dd($n3b);
            foreach ($n2 as $key => $value) {
                //dd($value->array);
                if ($value->array != null) {
                    foreach ($value->array as $key2 => $value2) {
                        //dd($value->array);
                        if (strpos(Str::slug($value2['texto2A'], '-'), $request->palabra) !== false) {
                            //dd('entro');
                            $temp = array();
                            $temp['label'] = $value2['texto2A'];
                            $temp['archivo'] =  $value2['archivo1A'];
                            $temp['category'] =  $value->titulo;
                            $temp['slug'] = Str::slug($value2['texto2A'], '-');
                            $temp['tipo'] = 'n2';
                            array_push($arrayTotal, $temp);
                        }
                    }
                }
            }
            foreach ($n3b as $key => $value) {
                if ($value->array != null) {
                    //dd($value->array);
                    foreach ($value->array as $key2 => $value2) {
                        if (strpos(Str::slug($value2['texto2A'], '-'), $request->palabra) !== false) {
                            $temp = array();
                            $temp['label'] = $value2['texto2A'];
                            $temp['archivo'] =  $value2['archivo1A'];
                            $temp['category'] =  $value->titulo.' - '.$value->GestionNivel3->nombre;
                            $temp['slug'] = Str::slug($value2['texto2A'], '-');
                            $temp['tipo'] = 'n3b';
                            array_push($arrayTotal, $temp);
                        }
                    }
                }
            }

            //dd($arrayTotal);

            if (count($arrayTotal) > 0) {
                return response()->json([
                    'status' => true,
                    'message' => 'Success!',
                    'array' => $arrayTotal
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'No data'
                ]);
            }
            
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function buscadorDocumentos2(Request $request)
    {
        try {
            $arrayTotal = array();            
            $n1 = GestionNivel1::all();
            $n2 = GestionNivel2::all();
            $n3b = GestionNivel3b::all();

            foreach ($n2 as $key => $value) {
                if ($value->array != null) {
                    foreach ($value->array as $key2 => $value2) {
                        if ($request->palabra == $value2['texto2A']) {
                            $temp = array();
                            $temp['texto'] = $value2['texto2A'];
                            $temp['archivo'] =  $value2['archivo1A'];
                            array_push($arrayTotal, $temp);
                        }
                    }
                }
            }

            //BUSCAR POR COINCIDENCIA NIVEL 1
            foreach ($n1 as $key => $value) {
                if($request->palabra == $value->nombre){
                    $nDos = $value->GestionNivel2;
                    $cantidad = count($nDos);
                    foreach($nDos as $key2 => $value2){
                        if ($value2->array != null) {
                            foreach($value2->array as $key3 => $value3){
                                $temp = array();
                                $temp['id'] = $value->id.$value2->id;
                                $temp['texto'] = $value3['texto2A'];
                                $temp['archivo'] =  $value3['archivo1A'];
                                if ($cantidad > 1) {
                                    $temp['categoria'] =  $value2->titulo.' - '.$value->nombre;
                                }else{
                                    $temp['categoria'] =  $value2->titulo;
                                }                                
                                array_push($arrayTotal, $temp);
                            }    
                        }
                                            
                    }
                }
                
            }

            //BUSCAR POR COINCIDENCIA NIVEL 2
            
            foreach ($n2 as $key => $value) {
                if($request->palabra == $value->titulo){                    
                    foreach($nDos as $key2 => $value2){
                        if ($value2->array != null) {
                            foreach($value2->array as $key3 => $value3){
                                $temp = array();
                                $temp['texto'] = $value3['texto2A'];
                                $temp['archivo'] =  $value3['archivo1A'];
                                if ($cantidad > 1) {
                                    $temp['categoria'] =  $value2->titulo.' - '.$value->nombre;
                                }else{
                                    $temp['categoria'] =  $value2->titulo;
                                }                                
                                array_push($arrayTotal, $temp);
                            }    
                        }
                                            
                    }
                }                
            }

           

           
            
            return response()->json([
                'status' => true,
                'message' => 'Success!',
                'data' => $arrayTotal
            ]);
            
        } catch (\Exception $e) {
            dd($e);
        }
    }
}