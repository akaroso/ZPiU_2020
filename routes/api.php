<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Models\Article;

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

Route::get('produkts', 'App\Http\Controllers\ProduktController@index');
Route::get('produkts/{id}', 'App\Http\Controllers\ProduktController@show');
Route::post('produkts', 'App\Http\Controllers\ProduktController@store');
Route::put('produkts/{id}', 'App\Http\Controllers\ProduktController@update');
Route::delete('produkts/{id}', 'App\Http\Controllers\ProduktController@delete');

//kontrahenci

Route::get('kontrahents', 'App\Http\Controllers\KontrahentController@index');
Route::get('kontrahents/{id}', 'App\Http\Controllers\KontrahentController@show');
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

//artyku

Route::get('articles', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Article::all();
});
 
Route::get('articles/{id}', function($id) {
    return Article::find($id);
});

Route::post('articles', function(Request $request) {
    return Article::create($request->all);
});

Route::put('articles/{id}', function(Request $request, $id) {
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('articles/{id}', function($id) {
    Article::find($id)->delete();

    return 204;
});