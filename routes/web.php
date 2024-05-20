<?php

use App\Http\Controllers\BagavadGitaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*******Bagavad Gita***********/

Route::get('/',[BagavadGitaController::class,'home']);

/*******End Bagavad Gita***********/
