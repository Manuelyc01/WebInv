<?php

/*
|--------------------------------------------------------------------------
| 								ADMIN Routes
|--------------------------------------------------------------------------
|
*/
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
	Route::resource('equipo-adm', 'EquipoController');
    Route::resource('categoriaEquipo-adm', 'CategoriaEquipoController');
	Route::resource('colaborador-adm', 'ColaboradorController');
});


