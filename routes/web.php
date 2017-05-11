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

Route::get('/mensajes', function () {

    $mensaje = new \App\Mensaje();
    $mensaje->usuario = "ecarvajal";
    $mensaje->texto = "Jelou";
    $mensaje->fecha =\Carbon\Carbon::now();

    $mensajes = \App\Mensaje::all();

    return view("welcome",["mensajes" => $mensajes]);


});