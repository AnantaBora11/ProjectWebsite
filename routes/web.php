<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicView;

Route::get('categories',[App\Http\Controllers\CategoryController::class, 'index']);
Route::get('categories/create',[App\Http\Controllers\CategoryController::class, 'create']);
Route::post('categories/create', [App\Http\Controllers\CategoryController::class, 'store']);
Route::get('categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::put('categories/{id}/edit',[App\Http\Controllers\CategoryController::class, 'update']);
Route::get('categories/{id}/delete', [App\Http\Controllers\CategoryController::class, 'destroy']);

Route::get('/contact', function () {
    return view('public/contact');
})->name('contact');

Route::get('/about', function () {
    return view('public/about');
})->name('about');

Route::get('/login', function () {
    return view('public/login');
})->name('login');

Route::get('/', [PublicView::class, 'home'])->name ('home');

Route::get('/error', function () {
    return view('error/error');
})->name('error');