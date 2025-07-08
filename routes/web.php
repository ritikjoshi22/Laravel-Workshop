<?php

use App\Http\Controllers\CrudController;
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

Route::get('//parameter/{id}', function ($id) {
    return view('abc', ['id' => $id]);
});

Route::resource("/crud", CrudController::class);
