<?php

Route::get('/', function () {
    return redirect('/atividades');
});

Route::get('home', function () {
    return redirect('/atividades');
});

/*
 * Auth
 */
Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [
        'as'      => 'auth.login.get',
        'uses'    => 'Auth\AuthController@getLogin',
    ]);

    Route::post('login', [
        'as'      => 'auth.login.post',
        'uses'    => 'Auth\AuthController@postLogin',
    ]);

    // Route::get('register',	['as' => 'auth.register.get',	'uses' => 'Auth\AuthController@getRegister']);
    // Route::post('register',	['as' => 'auth.register.post',	'uses' => 'Auth\AuthController@postRegister']);

    Route::get('logout', [
        'as'      => 'auth.logout.get',
        'uses'    => 'Auth\AuthController@getLogout',
    ]);
});

/*
 * Password
 */
Route::group(['prefix' => 'password'], function () {
    Route::get('email', [
        'as'      => 'password.email.get',
        'uses'    => 'Auth\PasswordController@getEmail',
    ]);

    Route::post('email', [
        'as'      => 'password.email.post',
        'uses'    => 'Auth\PasswordController@postEmail',
    ]);

    Route::get('reset/{token}', [
        'as'      => 'password.reset.get',
        'uses'    => 'Auth\PasswordController@getReset',
    ]);

    Route::post('reset', [
        'as'      => 'password.reset.post',
        'uses'    => 'Auth\PasswordController@postReset',
    ]);
});

/*
 * Atividades
 */
Route::resource('atividades', AtividadesController::class, ['parameters' => 'singular', 'except' => ['show']]);

/*
 * Provas
 */
Route::resource('provas', ProvasController::class);

/*
 * Users
 */
Route::group(['prefix' => 'users'], function () {
    Route::get(null, ['as' => 'users',   'uses' => 'UsersController@index']);
});
