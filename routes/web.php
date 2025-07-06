<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc', function () {
    return view('abc');
});

Route::get('/page/cderc', function () {
    return view('page/abc');
})->name('page');

Route::get('/parameter/{id}', function () {
    return view('abc');
});
