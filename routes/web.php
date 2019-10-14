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


Route::post('/nueva-tarea', 'TareasController@store');
Route::post('/editar/{id}', 'TareasController@update');
Route::delete('/borrar/{id}', 'TareasController@destroy');


Route::get('/catalogo','CatalogosController@index');
Route::delete('/elimina/{id}','CatalogosController@destroy');
Route::post('/nueva-tarea', 'CatalogosController@store');

Route::delete('/borrar/{id}','CatalogosController@destroy2');
Route::post('/nueva-tarea2', 'CatalogosController@store2');
Route::get('/login',function(){

    return view('login');
});

Route::get('/','TareasController@index');
Route::get('/eliminas/{id}','TareasController@destroy');


Route::post('/agregar/{id}','SlidersController@store');



Route::get('/eventos',function(){
    return view('eventos');
});
Route::get('/acerca',function(){
    return view('acerca');
});

Route::get('/promociones',function(){
    return view('promociones');
});


