<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImporateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/imporate/create', [ImporateController::class, 'create'])->name('imporate.create');
Route::get('/imporate', [ImporateController::class, 'index'])->name('imporate.index');