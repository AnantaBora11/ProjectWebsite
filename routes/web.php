<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicView;

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

Route::get('/test', function () {
    return view('test');
});