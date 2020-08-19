<?php

use Illuminate\Support\Facades\Route;

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

Route::get('hola', function () {
    return 'hola usfa';
});

Route::get('jorge', function () {
    return 'hola a todos';
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});




//tambien se puede poner codigo, una forma de introducir parametros
//Route::get('user/{codigo}', function ($codigo) {
//    return 'Usuario '.$codigo;
//});

//ejemplo
Route::get('saludar/{nombre}', function ($nombre) {
    return "<h1>hola $nombre, como estas?<h1>";
});


Route::get('bootstrap', function () {
    return view('bootstrap');
});

Route::get('acercade', function () {
    return view('bienvenido');
});

Route::get('formula', 'FormulaController@formula');

Route::post('solucion', ['as' => 'formula.solucion', 'uses' => 'FormulaController@solucion']);

