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

//calculadora 
//suma

Route::get('calculadora', 'calController@calculadora');

Route::post('solucioncal', ['as' => 'calculadora.solucioncal', 'uses' => 'calController@solucioncal']);

//resta
Route::get('calculadora', 'restaController@calculadora');

Route::post('resta', ['as' => 'calculadora.resta', 'uses' => 'restaController@resta']);

//division
Route::get('calculadora', 'divisionController@calculadora');

Route::post('division', ['as' => 'calculadora.division', 'uses' => 'divisionController@division']);
 
//multiplicacion

Route::get('calculadora', 'multiController@calculadora');

Route::post('multi', ['as' => 'calculadora.multi', 'uses' => 'multiController@multi']);

//potencia

Route::get('calculadora', 'potController@calculadora');

Route::post('pot', ['as' => 'calculadora.pot', 'uses' => 'potController@pot']);
