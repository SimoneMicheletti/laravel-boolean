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

Route::get('/helloAll', function () {
	return view('hello');
});

Route::get('/helloYou', function () {
	return view('helloYou', [
		'name' => 'Topolino'
	]);
});

Route::get('/helloYou2', function () {
	return view('helloYou', [
		'name' => 'Paperino'
	]);
});

Route::get('/holaTodo', 'MainController@hola1');

Route::get('/holaTu', 'MainController@hola2');

Route::get('/holaTu2', 'MainController@hola3');