<?php

use App\Http\Controllers\BagavadGitaController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*******Bagavad Gita***********/

Route::get('/',[BagavadGitaController::class,'home'])->name('/');
Route::get('chapter/{id}',[BagavadGitaController::class,'chapter'])->name('chapter');
Route::get('chapter/{ch}/sloks/{sl}',[BagavadGitaController::class,'sloks'])->name('sloks');
Route::get('donate',[BagavadGitaController::class,'donate'])->name('donate');
Route::get('/pay-with-upi', [PaymentController::class, 'createUpiLink'])->name('pay-with-upi');
Route::get('/upi-callback', [PaymentController::class, 'handleCallback'])->name('upi-callback');


/*******End Bagavad Gita***********/
