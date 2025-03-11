<?php

use Laravel\Sanctum\Sanctum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;


Route::prefix('v1')->group(function () {
// Route::middleware('api')->group(function () {
Route::get('post', 'App\Http\Controllers\postcontroller@index');
Route::get('post/create', 'App\Http\Controllers\postcontroller@create');
Route::post('post/store', 'App\Http\Controllers\postcontroller@store')->name('post.store');

});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

