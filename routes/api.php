<?php

use App\Http\Controllers\ProduktController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//produkty

Route::get('produkts/nip', 'App\Http\Controllers\ProduktController@index'); //funkcja wywalajaca liste produktow 
Route::get('produkts/{id}', 'App\Http\Controllers\ProduktController@show');
Route::post('produkts', 'App\Http\Controllers\ProduktController@store');
Route::put('produkts/{id}', 'App\Http\Controllers\ProduktController@update');
Route::delete('produkts/{id}', 'App\Http\Controllers\ProduktController@delete');
Route::post('produkts', 'App\Http\Controllers\ProduktController@store');
Route::post('produkts/producent/{id}',[ProduktController::class, 'saveforcustromer']);


//kontrahenci

Route::get('kontrahents', 'App\Http\Controllers\KontrahentController@index');
Route::get('kontrahents/{id}', 'App\Http\Controllers\KontrahentController@show');

Route::get('produkts/nip/{nip}', 'App\Http\Controllers\KontrahentController@show2'); //funkcja wywalajaca liste produktow dla danego kontrahenta

Route::post('kontrahents', 'App\Http\Controllers\KontrahentController@store');
Route::put('kontrahents/{id}', 'App\Http\Controllers\KontrahentController@update');
Route::delete('kontrahents/{id}', 'App\Http\Controllers\KontrahentController@delete');

//producenci

Route::get('producents', 'App\Http\Controllers\ProducentController@index');
Route::get('producents/{id}', 'App\Http\Controllers\ProducentController@show');
Route::post('producents', 'App\Http\Controllers\ProducentController@store');
Route::put('producents/{id}', 'App\Http\Controllers\ProducentController@update');
Route::delete('producents/{id}', 'App\Http\Controllers\ProducentController@delete');

//kategorie

Route::get('kategorias', 'App\Http\Controllers\KategoriaController@index');
Route::get('kategorias/{id}', 'App\Http\Controllers\KategoriaController@show');
Route::post('kategorias', 'App\Http\Controllers\KategoriaController@store');
Route::put('kategorias/{id}', 'App\Http\Controllers\KategoriaController@update');
Route::delete('kategorias/{id}', 'App\Http\Controllers\KategoriaController@delete');

