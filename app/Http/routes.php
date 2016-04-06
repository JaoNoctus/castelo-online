<?php

Route::get('/', 	function() { header('Location: atividades'); });
Route::get('home', 	function() { header('Location: atividades'); });

/*
 * Auth
 */
Route::group(['prefix' => 'auth'], function ()
{
	Route::get('login', [
		'as'	=> 'auth.login.get',
		'uses'	=> 'Auth\AuthController@getLogin'
	]);

	Route::post('login', [
		'as'	=> 'auth.login.post',
		'uses'	=> 'Auth\AuthController@postLogin'
	]);

	// Route::get('register',	['as' => 'auth.register.get',	'uses' => 'Auth\AuthController@getRegister']);
	// Route::post('register',	['as' => 'auth.register.post',	'uses' => 'Auth\AuthController@postRegister']);

	Route::get('logout', [
		'as'	=> 'auth.logout.get',
		'uses'	=> 'Auth\AuthController@getLogout'
	]);
});

/*
 * Password
 */
Route::group(['prefix' => 'password'], function ()
{
	Route::get('email', [
		'as'	=> 'password.email.get',
		'uses'	=> 'Auth\PasswordController@getEmail'
	]);

	Route::post('email', [
		'as'	=> 'password.email.post',
		'uses'	=> 'Auth\PasswordController@postEmail'
	]);

	Route::get('reset/{token}', [
		'as'	=> 'password.reset.get',
		'uses'	=> 'Auth\PasswordController@getReset'
	]);

	Route::post('reset', [
		'as'	=> 'password.reset.post',
		'uses'	=> 'Auth\PasswordController@postReset'
	]);
});

/*
 * Atividades
 */
Route::group(['prefix' => 'atividades'], function ()
{
	Route::get(NULL, [
		'as'	=> 'atividades',
		'uses'	=> 'AtividadesController@index'
    ]);

	Route::get('create', [
		'middleware'	=> [
			'auth'	=> 'needsPermission:atividades.create'
		],
		'as'	=> 'atividades.create',
		'uses'	=> 'AtividadesController@create'
	]);

	Route::post('store', [
		'middleware'	=> [
			'auth'	=> 'needsPermission:atividades.create'
		],
		'as'	=> 'atividades.store',
		'uses'	=> 'AtividadesController@store'
	]);

	Route::get('{id}/edit', [
		'middleware'	=> [
			'auth'	=> 'needsPermission:atividades.edit'
		],
		'as'	=> 'atividades.edit',
		'uses'	=> 'AtividadesController@edit'
	]);

	Route::put('{id}/update', [
		'middleware'	=> [
			'auth'	=> 'needsPermission:atividades.edit'
		],
		'as'	=> 'atividades.update',
		'uses'	=> 'AtividadesController@update'
	]);

	Route::get('{id}/destroy', [
		'middleware'	=> [
			'auth'	=> 'needsPermission:atividades.destroy'
		],
		'as'	=> 'atividades.destroy',
		'uses'	=> 'AtividadesController@destroy'
	]);
});

/*
 * Provas
 */
Route::group(['prefix' => 'provas'], function ()
{
	Route::get(NULL, [
		'as'	=> 'provas',
		'uses'	=> 'ProvasController@index'
	]);

	Route::get('create', [
		'middleware'	=> [
			'auth'	=> 'needsPermission:provas.create'
		],
		'as'	=> 'provas.create',
		'uses'	=> 'ProvasController@create'
	]);

	Route::post('store', [
		'middleware'	=> [
			'auth'	=> 'needsPermission:provas.create'
		],
		'as'	=> 'provas.store',
		'uses'	=> 'ProvasController@store'
	]);

	Route::get('{id}/edit', [
		'middleware'	=> [
			'auth'	=> 'needsPermission:provas.edit'
		],
		'as'	=> 'provas.edit',
		'uses'	=> 'ProvasController@edit'
	]);

	Route::put('{id}/update', [
		'middleware'	=> [
			'auth'	=> 'needsPermission:provas.edit'
		],
		'as'	=> 'provas.update',
		'uses'	=> 'ProvasController@update'
	]);

	Route::get('{id}/destroy', [
		'middleware'	=> [
			'auth'	=> 'needsPermission:provas.destroy'
		],
		'as'	=> 'provas.destroy',
		'uses'	=> 'ProvasController@destroy'
	]);
});

/*
 * Users
 */
Route::group(['prefix' => 'users'], function ()
{
	Route::get(NULL,           ['as' => 'users',   'uses' => 'UsersController@index']);
});
