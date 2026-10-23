<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [RegisterController::class, 'login']);

Route::get('/', function () {
    return view('welcome');
});
