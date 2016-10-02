<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('article', 'ArticleController@create');
Route::get('article/create', 'CreateController@home');
Route::post('article/create', 'CreateController@store');

Route::get('create/article/edit/{id}/{title}', 'TextController@edit');
Route::delete('create/article/task/{task}', 'ArticleController@task');
Route::resource('edit', 'ArticleController@edit');
Route::resource('update', 'ArticleController@update');




