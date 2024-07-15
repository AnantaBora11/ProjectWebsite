<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

Route::get('/', [PublicController::class, 'home'])->name ('home');
Route::get('/about', [PublicController::class, 'about'])->name ('about');

Route::get('/error', function () {
    return view('error/error');
})->name('error');


Route::get('index', [PrivateController::class, 'index'])->name('index');
Route::get('create', [PrivateController::class,'create'])->name ('create');
Route::get('upload', [PrivateController::class,'upload'])->name ('upload');

Route::resource('dashboard/project', DashboardController::class);
Route::resource('dashboard/home', HomeController::class)->names('dashboard.home');

Route::get('/sesi',[SessionController::class, 'index'])->name('login');
Route::post('/sesi/login',[SessionController::class, 'login']);
Route::get('/sesi/logout',[SessionController::class, 'logout']);
Route::get('/sesi/register',[SessionController::class, 'register']);
Route::post('/sesi/create',[SessionController::class, 'create']);