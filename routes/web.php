<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/materias/listado', 'MateriasController@index');
Route::get('/materias/create', 'MateriasController@create');
Route::POST('/materias/store', 'MateriasController@store');
Route::get('/materias/show/{materia}', 'MateriasController@show');
Route::POST('/materias/edit/{id}', 'MateriasController@edit');
Route::get('/materias/update/{id}', 'MateriasController@update');

/*
route::get('/materias/listado', function() {
  return  view('materias.indexmaterias');
});

route::get('/materias/create', function() {
  return  view('materias.formmaterias');
});


route::get('/materias/show/{id}', function($id) {
  //buscar materia
  return view('materia.showmateria', compact('id'));
    //->with(['id' => $id, 'nombre'] -> "Progra.Internet");
});

route::get('/materias/edit/{id}', function($id) {
  //nsulta materia de id
  return  view('materias.formeditmaterias' ,compact('id));
});

route::get('/materias/update/{id}', function ($id) {
  //validacio
  //$materia = "POST"['materia'];

});

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/alumno', 'AlumnoController@index');