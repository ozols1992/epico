<?php
Route::get('/', 'FrontController@index');

Auth::routes();

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('editUser', 'editUserController@index');
Route::post('editUser', 'editUserController@editUser');

Route::get('/login/{social}','Auth\LoginController@socialLogin')
    ->where('social' , 'linkedin');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')
    ->where('social' , 'linkedin');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('admin', 'AdminController@display_users');

Route::get('vacancies', 'epicoApiController@index');
