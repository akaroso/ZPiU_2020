<?php

use App\Http\Controllers\Api\ProduktController;
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

Route::get('/faked/kontrahent', 'App\Http\Controllers\FakedKontrahentControlled@index');

//produkty

Route::get('produkts/nip', 'App\Http\Controllers\Api\ProduktController@index'); //funkcja wywalajaca liste produktow
Route::get('produkts/{id}', 'App\Http\Controllers\Api\ProduktController@show');
Route::post('produkts', 'App\Http\Controllers\Api\ProduktController@store');
Route::put('produkts/{id}', 'App\Http\Controllers\Api\ProduktController@update');
Route::delete('produkts/{id}', 'App\Http\Controllers\Api\ProduktController@delete');
Route::post('produkts', 'App\Http\Controllers\Api\ProduktController@store');
Route::post('produkts/producent/{id}',[ProduktController::class, 'saveforcustromer']);


//kontrahenci

Route::get('kontrahents', 'App\Http\Controllers\Api\KontrahentController@index');
Route::get('kontrahents/{id}', 'App\Http\Controllers\Api\KontrahentController@show');

Route::get('produkts/nip/{nip}', 'App\Http\Controllers\Api\KontrahentController@show2'); //funkcja wywalajaca liste produktow dla danego kontrahenta

Route::post('kontrahents', 'App\Http\Controllers\Api\KontrahentController@store');
Route::put('kontrahents/{id}', 'App\Http\Controllers\Api\KontrahentController@update');
Route::delete('kontrahents/{id}', 'App\Http\Controllers\Api\KontrahentController@delete');

//producenci

Route::get('producents', 'App\Http\Controllers\Api\ProducentController@index');
Route::get('producents/{id}', 'App\Http\Controllers\Api\ProducentController@show');
Route::post('producents', 'App\Http\Controllers\Api\ProducentController@store');
Route::put('producents/{id}', 'App\Http\Controllers\Api\ProducentController@update');
Route::delete('producents/{id}', 'App\Http\Controllers\Api\ProducentController@delete');

//kategorie

Route::get('kategorias', 'App\Http\Controllers\Api\KategoriaController@index');
Route::get('kategorias/{id}', 'App\Http\Controllers\Api\KategoriaController@show');
Route::post('kategorias', 'App\Http\Controllers\Api\KategoriaController@store');
Route::put('kategorias/{id}', 'App\Http\Controllers\Api\KategoriaController@update');
Route::delete('kategorias/{id}', 'App\Http\Controllers\Api\KategoriaController@delete');

