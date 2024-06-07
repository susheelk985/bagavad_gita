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
Route::get('chapter/{id}',[BagavadGitaController::class,'chapter'])->name('chapter');
Route::get('chapter/{ch}/sloks',[BagavadGitaController::class,'sloks'])->name('sloks');

/*******End Bagavad Gita***********/
