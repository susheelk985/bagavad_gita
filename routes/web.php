<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('gita_home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
