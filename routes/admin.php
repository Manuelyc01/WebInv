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

	Route::resource('componente-adm', 'ComponenteController');
    Route::resource('categoriaComponente-adm', 'CategoriaComponenteController');
	
	Route::get('componenteTrabajadorEquipo-adm/{id_ofi_traba_equipo}', 'CompoTrabaEquipoAdicionalController@ListarEquiCompoEqTrab')->name('componenteTrabajadorEquipo-adm.index');
	Route::get('componenteTrabajadorEquipo-adm/create/{id_ofi_traba_equipo}', 'CompoTrabaEquipoAdicionalController@CrearEquiCompoEqTrab')->name('componenteTrabajadorEquipo-adm.create');
	Route::get('componenteTrabajadorEquipo-adm/edit/{id_ofi_traba_equi_compo}/{id_ofi_equi_trabajador}', 'CompoTrabaEquipoAdicionalController@EditarEquiCompoEqTrab')->name('componenteTrabajadorEquipo-adm.edit');
	Route::post('componenteTrabajadorEquipo-adm/store', 'CompoTrabaEquipoAdicionalController@StoreEquiCompoEqTrab')->name('componenteTrabajadorEquipo-adm.store');
	Route::put('componenteTrabajadorEquipo-adm/update/{id_ofi_traba_equi_compo}', 'CompoTrabaEquipoAdicionalController@UpdateEquiCompoEqTrab')->name('componenteTrabajadorEquipo-adm.update');
	Route::delete('componenteTrabajadorEquipo-adm/destroy/{id_ofi_traba_equi_compo}', 'CompoTrabaEquipoAdicionalController@DestroyEquiCompoEqTrab')->name('componenteTrabajadorEquipo-adm.destroy');
  
	Route::get('/equipo-img/{id}', 'EquipoController@img');
	Route::resource('imagen-adm', 'ImagenController');
	Route::get('/deleteImagen/{id}/{type}','ImagenController@destroy');		
	Route::get('/equipo-doc/{id}/{type}', 'DocumentoController@destroy');

	Route::resource('ofiTrabajadorEquipo-adm','OfiTrabajadorEquipoController');
	Route::get('/ofiTrabajadorEquipoAjax-adm/{id}', 'OfiTrabajadorEquipoAjax@VerificarEquipo');
	Route::get('/ofiTrabEqui-img/{id}','OfiTrabajadorEquipoController@img');
  
	Route::resource('solicitudes-adm', 'SolicitudesController');

});


