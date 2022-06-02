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
    return view('connexion');
});
Route::get('/22', function () {
    return view('inscriptionA');
});
Route::get('/55', function () {
    return view('listeE');
});
Route::get('/99', function () {
    return view('ajoutE');
});