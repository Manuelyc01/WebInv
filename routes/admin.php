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
	Route::get('/colaboradorSede/{id}', 'ColaboradorController@colaboradorSedes');

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
	Route::get('/deleteDoc/{id}/{type}', 'DocumentoController@destroy');

	Route::resource('ofiTrabajadorEquipo-adm','OfiTrabajadorEquipoController');
	Route::get('/ofiTrabajadorEquipoAjax-adm/{id}', 'OfiTrabajadorEquipoAjax@VerificarEquipo');
	Route::get('/ofiTrabEqui-img/{id}','OfiTrabajadorEquipoController@img');
	Route::get('/ofiTrabEqui-transf/{id}','OfiTrabajadorEquipoController@transferir');
	Route::get('/trabEquipos/{id}','OfiTrabajadorEquipoController@equiposTrab');
	Route::get('/equiposAsignados','OfiTrabajadorEquipoController@equiposAsignados');
	Route::get('/equiposNoAsignados','OfiTrabajadorEquipoController@equiposNoAsignados');
	Route::get('/equiposEnMantenimiento','OfiTrabajadorEquipoController@equiposMantenmimiento');
	
	Route::post('/ofiTrabajadorEquipo-adm/transf/{id}','OfiTrabajadorEquipoController@transferirRegister');
  
	Route::resource('mantenimiento-adm', 'MantenimientoController');
	Route::get('/mantenimiento-adm/crear/{id}/{type}', 'MantenimientoController@create');
	Route::get('/mantenimientos/{id}', 'MantenimientoController@byEquiTrabaEqui');
	Route::get('/mantenimientosSolicitud/{id}', 'MantenimientoController@bySolicitud');
	Route::get('/mantenimiento-img/{id}','MantenimientoController@img');
	

	Route::resource('solicitudes-adm', 'SolicitudesController');
	Route::resource('SolOficinaEquipoTrab-adm', 'SolOficinaEquipoTraController');
	Route::resource('SolOficinaEquipoTrabUser-adm', 'SolOficinaEquipoTraUserController');
	Route::get('/solOfiTrabEqui-img/{id}','SolOficinaEquipoTraController@img');
	Route::get('/solOfiTrabEquiUser-img/{id}','SolOficinaEquipoTraUserController@img');
	Route::get('/ConOfiTraEquipoUser','SolOficinaEquipoTraUserController@ConOfiTraEquipoUser');
	Route::get('/SinOfiTraEquipoUser','SolOficinaEquipoTraUserController@SinOfiTraEquipoUser');

	Route::get('/solicitudesRecibidas','SolOficinaEquipoTraController@solRecibidos');
	Route::get('/solicitudesFinalizadas','SolOficinaEquipoTraController@solFinalizadas');
	Route::get('/solicitudesEnProceso','SolOficinaEquipoTraController@solProceso');

	Route::get('/asignaciongenerar-pdf/{id}','OfiTrabajadorEquipoController@pdf');

	
	
	//colaborador ubicacion
	Route::get('/addSedeCol/{idsede}/{idcol}','ColaboradorController@addColaboradorSede');
	Route::get('/sedesDataList/{idcol}','ColaboradorController@sedesDataList');
	Route::get('/dropSede/{idsede}/{idcol}','ColaboradorController@dropSede');
	//////////////////////
	Route::get('/reporte-solicitudes', 'ReportesExcelController@ReporteSolicitudes');
	Route::get('/reporte-mantenimiento', 'ReportesExcelController@ReporteMantenimiento');
	Route::get('/reporte-oficina-traba-equipo', 'ReportesExcelController@ReporteOficinaTrabajadorEquipo');
});


