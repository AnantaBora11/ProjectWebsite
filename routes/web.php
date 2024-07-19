<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;

// public
Route::get('/', [PublicController::class, 'home'])->name ('home');
Route::get('/about', [PublicController::class, 'about'])->name ('about');
Route::get('/contact', [PublicController::class, 'kontak'])->name ('contact');
Route::post('/contact', [PublicController::class, 'storeContact'])->name('contact.store');


// error handlling
Route::get('/error', function () {
    return view('error/error');
})->name('error');

// dashboard
Route::resource('dashboard/project', DashboardController::class);
Route::resource('dashboard/home', HomeController::class)->names('dashboard.home');
Route::resource('dashboard/kontak', KontakController::class)->names('dashboard.kontak');

// Login
Route::get('/sesi',[SessionController::class, 'index'])->name('login');
Route::post('/sesi/login',[SessionController::class, 'login']);
Route::get('/sesi/logout',[SessionController::class, 'logout']);
Route::get('/sesi/register',[SessionController::class, 'register']);
Route::post('/sesi/create',[SessionController::class, 'create']);