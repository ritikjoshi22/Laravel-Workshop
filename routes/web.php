<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentController;
use App\Models\Subject;
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

Route::resource("/subject",SubjectController::class);
Route::resource("/student", StudentController::class);

Route::view("/","homepage");
