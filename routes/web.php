<?php

use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'doLogin'])->name('login.submit');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');


Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');


