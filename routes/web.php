<?php

use App\Http\Controllers\InschrijvingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('inschrijving', InschrijvingController::class)
        ->except(['show', 'create', 'store'])->middleware('auth');

Route::resource('register', RegisterController::class)->only(['create', 'store']);

Route::resource('admin', AdminController::class)->only(['index'])->middleware(['auth', 'verified', 'role']);

require __DIR__.'/auth.php';
