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

<<<<<<< HEAD
=======
Route::resource('regional','RegionalController');
Route::get('regional/destroy/{id}',['as' => 'regional/destroy','uses'=>'RegionalController@destroy']);
Route::post('regional/search',['as' => 'regional/search', 'uses'=>'RegionalController@search']);

Route::resource('aprendiz','AprendizController');
Route::get('aprendiz/destroy/{id}',['as' => 'aprendiz/destroy','uses'=>'AprendizController@destroy']);
Route::post('aprendiz/search',['as' => 'aprendiz/search', 'uses'=>'AprendizController@search']);	

Route::resource('programa','ProgramaController');
Route::get('programa/destroy/{id}',['as' => 'programa/destroy','uses'=>'ProgramaController@destroy']);
Route::post('programa/search',['as' => 'programa/search', 'uses'=>'ProgramaController@search']);	

>>>>>>> cbabf020d4cf8d2efba0d4f890ad0d76ef7175f1
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> cbabf020d4cf8d2efba0d4f890ad0d76ef7175f1
Route::resource('regional','RegionalController');
Route::get('regional/destroy/{id}',['as' => 'regional/destroy','uses'=>'RegionalController@destroy']);
Route::post('regional/search',['as' => 'regional/search', 'uses'=>'RegionalController@search']);	

<<<<<<< HEAD
Route::resource('concepto','ConceptoController');
Route::get('concepto/destroy/{id}',['as' => 'concepto/destroy','uses'=>'ConceptoController@destroy']);
Route::post('concepto/search',['as' => 'concepto/search', 'uses'=>'ConceptoController@search']);

Route::resource('item','ItemController');
Route::get('item/destroy/{id}',['as' => 'item/destroy','uses'=>'ItemController@destroy']);
Route::post('item/search',['as' => 'item/search', 'uses'=>'ItemController@search']);

Route::resource('evento','EventoController');
Route::get('evento/destroy/{id}',['as' => 'evento/destroy','uses'=>'EventoController@destroy']);
Route::post('evento/search',['as' => 'evento/search', 'uses'=>'EventoController@search']);	

Route::resource('curso','CursoController');
Route::get('curso/destroy/{id}',['as' => 'curso/destroy','uses'=>'CursoController@destroy']);
Route::post('curso/search',['as' => 'curso/search', 'uses'=>'CursoController@search']);	

Route::resource('taller','TallerController');
Route::get('taller/destroy/{id}',['as' => 'taller/destroy','uses'=>'TallerController@destroy']);
Route::post('taller/search',['as' => 'taller/search', 'uses'=>'TallerController@search']);	
=======
Route::resourse ('profesional','ProfesionalController');
Route::get('profesional/destroy/{ID_PROFESIONAL}',['as'=>'profesional/destroy', 'uses'=>'ProfesionalController@destroy']);
Route::post('profesional/search',['as'=>'profesional/search','uses'=>'ProfesionalController@search']);

Route::resourse ('seguimiento','SeguimientoController');
Route::get('seguimiento/destroy/{ID_SEGUIMIENTO}',['as'=>'seguimiento/destroy', 'uses'=>'SeguimientoController@destroy']);
Route::post('seguimiento/search',['as'=>'seguimiento/search','uses'=>'SeguimientoController@search']);
>>>>>>> cdfc9e36b5934daf9dd5f14539f35964eb309025
>>>>>>> cbabf020d4cf8d2efba0d4f890ad0d76ef7175f1
