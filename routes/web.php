<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocalizationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('home', [AppController::class, 'index'])->name('home');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('sendmail', [ContactController::class, 'sendmail'])->name('sendmail');

Route::post('subscribe', [ContactController::class, 'subscribe'])->name('newsletter');