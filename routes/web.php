<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/content', function () {
    return view('content'); // This should match the name of your Blade file without the .blade.php extension
})->name('content');
