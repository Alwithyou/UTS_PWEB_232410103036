<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('login');
});


Route::get('/', [PageController::class, 'showLogin'])->name('login.show');
Route::post('/login', [PageController::class, 'handleLogin'])->name('login.submit');

Route::get('/dashboard', [PageController::class, 'Dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/pengelolaan/create', [PageController::class, 'pengelolaanCreate'])->name('pengelolaan.create');