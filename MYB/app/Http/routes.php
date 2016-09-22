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

Route::get('/', function () {
    return view('welcome');
});
Route::get('evenements/{n}', function($n) { 
    return view('evenements')->with('numero', $n); 
    //Equivalent : return view('evenements')->withNumero($n); 
})->where('n', '[0-9]+');

Route::get('articles/{n}', function($n) { 
    return view('articles')->with('numero', $n); 
    //Equivalent : return view('evenements')->withNumero($n); 
})->where('n', '[0-9]+');