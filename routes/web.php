<?php

//Lene

use App\Http\Controllers\applicationController;

Route::post('/test', function ($vacancyId){
    return "ddsds";
});//->middleware('auth');



Route::view('/vacancies', 'vacancies/vacancies');
Route::get('/vacancies/{Id}', 'vacancyController@vacancyView');
Route::get('/vacancies/{Id}/apply', 'applicationController@getFormView');//->middleware('auth');

Route::post('/vacancies/{Id}/apply', function ($vacancyId){
    $msg = request()->get('message');
    $c = new applicationController();
    
    return $c->createApplication($vacancyId, $msg) ? 
            redirect('/vacancies/' . $vacancyId . '/chat') : redirect('ERROR');
});//->middleware('auth');

Route::get('/vacancies/{vacancyId}/chat', function ($vacancyId){
return view('applications/applications_log', ['vacancy' => \App\vacancy::get($vacancyId)]);
});//->middleware('auth');

Route::get('/vacancies/{vacancyId}/chat/messages', function ($vacancyId){
    $c = new applicationController();
    return $c->getApplicationAndReplies($vacancyId);
});//->middleware('auth');

Route::post('/vacancies/{vacancyId}/chat/messages', function ($vacancyId){
    $msg = request()->get('msg');
    $c = new applicationController();
    
    return $c->createReply($vacancyId, $msg);
});//->middleware('auth');

//


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

//Route::get('vacancies', 'epicoApiController@callapi');
