<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::post('config-language', 'Config\ConfigurationController@redirectByLanguage')->name('web.config.language');

// Route::get('mapa-demo', function () {
// 	return view('web.welcome');
// });

// Route::get('/', function () {
//     echo "EN CONSTRUCCIÓN...";
// });

Route::namespace('Web')->group(function() {

    //DEFAULT
    Route::get('/', 'DefaultController@home')->name('home');
    Route::get('/informacion-de-gestion/{slug}', 'DefaultController@gestion')->name('gestion');
    Route::get('/informacion-de-gestion/{slug}/{slug2}', 'DefaultController@gestion')->name('gestion3');

    //NOSOTROS
    Route::get('/nosotros/historia', 'NosotrosController@historia')->name('historia');
    Route::get('/nosotros/equipo', 'NosotrosController@equipo')->name('equipo');

    //PRODUCTOS
    Route::get('/productos', 'ProductosController@productos')->name('productos');
    Route::get('/productos/industrial/{slug}', 'ProductosController@industrial')->name('industrial');
    Route::get('/productos/tradicional', 'ProductosController@tradicional')->name('tradicional');
    Route::get('/producto/industrial/{slug}', 'ProductosController@detalleindustrial')->name('detalleindustrial');
    Route::get('/producto/tradicional/{slug}', 'ProductosController@detalletradicional')->name('detalletradicional');

    //SEDES
    Route::get('/sedes/{slug}', 'SedesController@sedes')->name('sedes');

    //BOLSAS
    Route::get('/bolsa-de-trabajo/{slug}', 'BolsasController@trabajos')->name('trabajo');
    Route::get('/bolsa-de-servicios/{slug}', 'BolsasController@servicios')->name('servicios');
    Route::get('/bolsa-de-servicios/{slug}/{slug2}', 'BolsasController@serviciosDepartamento')->name('servicios-departamento');

    //FORMULARIOS
    Route::get('/sugerencias-y-consultas', 'FormulariosController@sugerencias')->name('sugerencias');
    Route::get('/denuncias', 'FormulariosController@denuncias')->name('denuncias');
    Route::get('/contactanos', 'FormulariosController@contactanos')->name('contactanos');
    Route::get('/gracias', 'FormulariosController@gracias')->name('gracias');
    Route::get('/gracias-denuncias', 'FormulariosController@graciasdenuncias')->name('gracias-denuncias');

    //REGISTRAR CONTACTOS
    Route::post('/guardar-contacto-sugerencia', 'FormulariosController@guardarFormSugerencia')->name('guardar-contacto-sugerencia');
    Route::post('/guardar-contacto-global', 'FormulariosController@guardarFormGlobal')->name('guardar-contacto-global');
    Route::post('/guardar-contacto-suscripcion', 'FormulariosController@guardarFormSuscripcion')->name('guardar-contacto-suscripcion');
    Route::post('/guardar-contacto-denuncia', 'FormulariosController@guardarFormDenuncia')->name('guardar-contacto-denuncia');

    //AJAX
    Route::post('/post-blog', 'UtilController@blogposts')->name('post-blog');
    Route::post('/buscador-documentos', 'UtilController@buscadorDocumentos')->name('buscador-documentos');

    //PRODUCTO INDUSTRIAL
    Route::post('/setear-producto-industrial-id', 'UtilController@setearProductoIndustrialSolicitado')->name('setear-producto-industrial-id');
    Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
    });
});
