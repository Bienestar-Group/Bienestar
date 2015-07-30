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

Route::resource('regional','RegionalController');
Route::get('regional/destroy/{id}',['as' => 'regional/destroy','uses'=>'RegionalController@destroy']);
Route::post('regional/search',['as' => 'regional/search', 'uses'=>'RegionalController@search']);

Route::resource('aprendiz','AprendizController');
Route::get('aprendiz/destroy/{id}',['as' => 'aprendiz/destroy','uses'=>'AprendizController@destroy']);
Route::post('aprendiz/search',['as' => 'aprendiz/search', 'uses'=>'AprendizController@search']);	

Route::resource('programa','ProgramaController');
Route::get('programa/destroy/{id}',['as' => 'programa/destroy','uses'=>'ProgramaController@destroy']);
Route::post('programa/search',['as' => 'programa/search', 'uses'=>'ProgramaController@search']);	

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


