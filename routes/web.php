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



Route::get('/calculadora', function () {
    return view('calculadora');
});

Route::get('/adicao', function () {
    return view('adicao');
});

Route::get('/subtracao', function () {
    return view('subtracao');
});

Route::get('/multiplicacao', function () {
    return view('multiplicacao');
});

Route::get('/divisao', function () {
    return view('divisao');
});


//Route::post('/resultadoAdicao', 'CalculosController@adicao');

Route::post('/resultado', 'CalculosController@adicao');

Route::post('/resultado', 'CalculosController@subtracao');

Route::post('/resultado', 'CalculosController@multiplicacao');

Route::post('/resultado', 'CalculosController@divisao');