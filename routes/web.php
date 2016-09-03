<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@welcome');

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', function () {
        return redirect('atividades');
    });

    Route::resource('atividades', 'AtividadesController');
    Route::resource('horarios', 'HorariosController', ['only' => 'index']);
});
