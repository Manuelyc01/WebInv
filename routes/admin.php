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


