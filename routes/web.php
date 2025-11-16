<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', ['nama' => 'Yusuf']);
});
Route::get('/blog', function () {
    return view('blog', ['nama' => 'Yusuf']);
});
Route::get('/contact', function () {
    return view('contact', ['nama' => 'Yusuf']);
});
