<?php

$namespace = '\Ems\AdminEms\controllers';
$middleware = \Config::get('lfm.middlewares');

Route::group(['namespace' => $namespace , 'prefix' => 'web-adm', 'middleware' => $middleware], function () {
	Route::get('/panel' , function() {
		return view('admin.welcome');
	})->name('panel');

	Route::resource('redirecciones', 'RedirectController');

	Route::any('/dropzone', 'DropzoneController@upload')->name('dropzone');

	//Importante : seo_routes
	Route::get('/seo', 'SeoController@index')->name('seo.index');
	Route::get('/seo/{id}', 'SeoController@edit')->name('seo.edit');
	Route::put('/seo/update/{id}', 'SeoController@update')->name('seo.update');


	Route::group(['middleware' => 'users.mgm'] , function() {
		//Profile
		Route::resource('usuarios', 'UserController');
		Route::get('/profile' , 'UserController@profile')->name('user.profile');
		Route::resource('roles', 'RoleController');

		Route::post('marcar-permiso', 'RoleController@permiso')->name('marcar-permiso');
	});

	Route::any('/change-password' , 'UserController@changePassword')->name('user.changePassword');
	Route::post('/profile/save' , 'UserController@saveProfile')->name('save.profile');

});