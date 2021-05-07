<?php

/*
|--------------------------------------------------------------------------
| 								ADMIN Routes
|--------------------------------------------------------------------------
|
*/
Auth::routes();

Route::prefix('web-adm')->group(function() {
	Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::post('/logout-admin', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::group(['prefix' => 'web-adm', 'namespace' => 'Config' , 'middleware' => 'auth:admin'] , function() {
    Route::resource('dictionary', 'DictionaryController');
});

Route::get('lang/{lang}', 'Config\LanguageController@setLocale')->name('config.language');

// Route::group(['prefix' => 'web-adm', 'namespace' => 'Config' , 'middleware' => 'auth:admin'] , function() {
//     Route::resource('dictionary', 'DictionaryController');
// });
 
Route::group(['prefix' => 'web-adm', 'namespace' => 'Admin' , 'middleware' => 'auth:admin'] , function() {
	Route::any('/dropzone', '\Ems\AdminEms\controllers\DropzoneController@upload')->name('dropzone');

	Route::resource('diccionario', 'DiccionarioController');
	
	Route::resource('banner-adm', 'BannerController');
	Route::resource('cargo-adm', 'CargoController');
	Route::resource('categoria-servicio-adm', 'CategoriaServicioController');
	Route::resource('contacto-denuncia-adm', 'ContactoDenunciaController');
	Route::resource('contacto-global-adm', 'ContactoGlobalController');
	Route::resource('contacto-sugerencia-adm', 'ContactoSugerenciaController');
	Route::resource('contacto-suscripcion-adm', 'ContactoSuscripcionController');
	Route::resource('departamento-adm', 'DepartamentoController');
	Route::resource('equipo-adm', 'EquipoController');
	Route::resource('etiqueta-industrial-adm', 'EtiquetaIndustrialController');
	Route::resource('etiqueta-tradicional-adm', 'EtiquetaTradicionalController');
	Route::resource('gestion-nivel1-adm', 'GestionNivel1Controller');
	Route::resource('gestion-nivel2-adm', 'GestionNivel2Controller');
	Route::resource('gestion-nivel3-adm', 'GestionNivel3Controller');
	Route::resource('gestion-nivel3b-adm', 'GestionNivel3bController');
	Route::resource('historia-adm', 'HistoriaController');
	Route::resource('home-adm', 'HomeController');
	Route::resource('industrial-adm', 'IndustrialController');
	Route::resource('insumo-industrial-adm', 'InsumoIndustrialController');
	Route::resource('listo-consumir-adm', 'ListoConsumirController');
	Route::resource('info-adm', 'InfoController');
	Route::resource('integrante-adm', 'IntegranteController');
	Route::resource('producto-industrial-adm', 'ProductoIndustrialController');
	Route::resource('producto-tradicional-adm', 'ProductoTradicionalController');
	Route::resource('sede-adm', 'SedeController');
	Route::resource('sede-denuncia-adm', 'SedeDenunciaController');
	Route::resource('servicio-adm', 'ServicioController');
	Route::resource('subcategoria-industrial-adm', 'SubcateIndustrialController');
	Route::resource('tipo-denuncia-adm', 'TipoDenunciaController');
	Route::resource('tipo-sugerencia-adm', 'TipoSugerenciaController');
	Route::resource('trabajo-adm', 'TrabajoController');
	Route::resource('tradicional-adm', 'TradicionalController');
	Route::resource('niveles-adm', 'NivelesController');

	Route::post('visible-trabajo', 'TrabajoController@activar')->name('visible-trabajo');
	Route::post('visible-servicio', 'ServicioController@activar')->name('visible-servicio');

	//EXPORTAR
	Route::get('csv-contacto-global', 'ContactoGlobalController@excelContacto')->name('csv-contacto-global');
	Route::get('csv-contacto-sugerencia', 'ContactoSugerenciaController@excelContacto')->name('csv-contacto-sugerencia');
	Route::get('csv-contacto-denuncia', 'ContactoDenunciaController@excelContacto')->name('csv-contacto-denuncia');
	Route::get('csv-contacto-suscripcion', 'ContactoSuscripcionController@excelContacto')->name('csv-contacto-suscripcion');

	
});

