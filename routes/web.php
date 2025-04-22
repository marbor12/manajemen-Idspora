<?php

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
    return view('dashboard');
})->name('dashboard');

Route::get('/tasks', function () {
    return view('tasks');
})->name('tasks');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/finance', function () {
    return view('finance');
})->name('finance');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');
