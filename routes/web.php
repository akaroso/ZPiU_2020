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

Route::resource('produkty', 'App\Http\Controllers\Web\ProduktWebController');
Route::resource('kategorie', 'App\Http\Controllers\Web\KategoriaWebController');
Route::get('kontrahenci/cena', 'App\Http\Controllers\Web\KontrahentWebController@cena')->name('kontrahenci.cena');
Route::PATCH('kontrahenci/cena/post', 'App\Http\Controllers\Web\KontrahentWebController@saveforcustromer')->name('kontrahenci.saveforcustromer');
Route::get('kontrahenci/{id}/cennik/', 'App\Http\Controllers\Web\KontrahentWebController@cennik')->name('kontrahenci.cennik');
Route::resource('kontrahenci', 'App\Http\Controllers\Web\KontrahentWebController');
Route::resource('producenci', 'App\Http\Controllers\Web\ProducentWebController');
Route::resource('cennik', 'App\Http\Controllers\Web\CennikController');



