<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/hola', function (Request $request) {
    return "Hola mundo";
});
Route::get('/categoria','App\Http\Controllers\CategoriaController@getCategoria');

Route::get('/categoria/{id}','App\Http\Controllers\CategoriaController@getCategoriaById');

Route::post('addCategoria','App\Http\Controllers\CategoriaController@addCategoria');

Route::put('updateCategoria/{id}','App\Http\Controllers\CategoriaController@updateCategoria');

Route::delete('deleteCategoria/{id}','App\Http\Controllers\CategoriaController@deleteCategoria');