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

    /*Route::get('/saludo', function () {
        return "<h1>Hola soy un saludo</h1>";
    });
    Route::get('/saludo/{nombre}', function ($nombre) {
        return "<h1>Hola $nombre, soy un saludo</h1>";
    });*/

  /*  Route::get('/saludo/{nombre}', function ($nombre) {
        return view('principal', ["variable" => $nombre, "edad" => 21]);
    });*/

    Route::get('/{banco}', "BancoController@show");
