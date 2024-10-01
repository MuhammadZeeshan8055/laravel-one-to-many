<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


route::resource('/students',StudentController::class);
route::resource('/books',BookController::class);