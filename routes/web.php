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
    return view('base');
});

Route::resource('produkty', 'App\Http\Controllers\ProduktWebController');
Route::resource('kategorie', 'App\Http\Controllers\KategoriaWebController');
Route::get('kontrahenci/cena', 'App\Http\Controllers\KontrahentWebController@cena')->name('kontrahenci.cena');
Route::post('kontrahenci/cena/post', 'App\Http\Controllers\KontrahentWebController@saveforcustromer')->name('kontrahenci.saveforcustromer');
Route::resource('kontrahenci', 'App\Http\Controllers\KontrahentWebController');
Route::resource('producenci', 'App\Http\Controllers\ProducentWebController');



