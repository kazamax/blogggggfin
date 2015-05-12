<?php

Route::get('/', [
	'uses' => 'WelcomeController@index',
	'as'   => 'home'
]);

Route::get('articulos/{slug}', [
	'as'   => 'article',
	'uses' => 'WelcomeController@article'
]);

Route::get('/tag/{tag}', [
	'as'   => 'tagged',
	'uses' => 'WelcomeController@tags'
]);

Route::get('/admin', [
	'as'   => 'adminsite',
	'uses' => 'AdminController@desktop'
]);

Route::get('/desktop', 'AdminController@desktop');

Route::get('admin/posts/{id}/edit', 'AdminController@edit');

Route::post('admin/posts/{id}/refresh', 'AdminController@refresh');

Route::get('admin/posts/new', [
	'as' 	 => 'nuevo',
	'uses'   => 'AdminController@nuevo'
]);

Route::get('admin/posts/{id}/delete', 'AdminController@delete');

Route::post('admin/posts/new', 'AdminController@crear');


Route::get('/logout', [
	'uses' => 'AdminController@logout',
	'as'   => 'logout'
]);

Route::controllers([
	'auth'     => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

