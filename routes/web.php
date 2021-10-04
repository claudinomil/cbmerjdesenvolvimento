<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/x1', function() {return view('auth.confirm-password');});
Route::get('/x2', function() {return view('auth.forgot-password');});
Route::get('/x3', function() {return view('auth.login');});
Route::get('/x4', function() {return view('auth.register');});
Route::get('/x5', function() {return view('auth.reset-password');});
Route::get('/x6', function() {return view('auth.verify-email');});

require __DIR__.'/auth.php';
