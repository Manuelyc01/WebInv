<?php

/*
|--------------------------------------------------------------------------
| 								ADMIN Routes
|--------------------------------------------------------------------------
|
*/

use App\Http\Controllers\Admin\ImagenController;

Auth::routes();

Route::prefix('')->group(function() {
	Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::post('/logout-admin', 'Auth\AdminLoginController@logout')->name('admin.logout');
	
});
Route::group(['prefix' => 'web-adm', 'namespace' => 'Admin' , 'middleware' => 'auth:admin'] , function() {
	Route::any('/dropzone', '\Ems\AdminEms\controllers\DropzoneController@upload')->name('dropzone');

	Route::resource('oficina-adm', 'OficinaController');
	Route::resource('cargoLaboral-adm', 'CargoLaboralController');
	Route::resource('sede-adm', 'SedeController');

	Route::resource('oficinaTrabajador-adm', 'OficinaTrabajadorController');
	Route::get('/oficinaTrabajador-adm-oficina/{sede}', 'OfinicaTrabajadorAjaxController@GetOficinaAjax');
	Route::get('/oficinaTrabajador-adm-oficina/{colaborador}/{sede}/{oficina}/{cargo_laboral}', 'OfinicaTrabajadorAjaxController@VerificarTrabajador');

	Route::resource('equipo-adm', 'EquipoController');
    Route::resource('categoriaEquipo-adm', 'CategoriaEquipoController');

	Route::resource('colaborador-adm', 'ColaboradorController');
  
	Route::get('/equipo-img/{id}', 'EquipoController@img');
	Route::resource('imagen-adm', 'ImagenController');
	Route::get('/deleteImagen/{id}','ImagenController@destroy');
  
	Route::resource('solicitudes-adm', 'SolicitudesController');

});


