<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/our-story', function () {
    return view('pages.our-story');
})->name('our-story');

Route::get('/experience', function () {
    return view('pages.experience');
})->name('experience');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/book', function () {
    return view('pages.book');
})->name('book');