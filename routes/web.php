<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/contact', function () {
    return view('contact');
});