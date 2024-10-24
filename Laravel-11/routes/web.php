<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [Users::class, 'index'])->name('index');
Route::get('/create', [Users::class, 'create'])->name('create');
Route::post('/store', [Users::class, 'store'])->name('store');
