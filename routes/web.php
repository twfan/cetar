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

// Route::get('/problems','ControllerReport@index');
// Route::post('/problems/store','ControllerReport@store');
// Route::get('/problems/show/{id}','ControllerReport@show');

Route::resource('problems','ControllerReport');
