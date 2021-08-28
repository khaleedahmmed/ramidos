<?php

namespace App\Http\Controllers\Website;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::group(['middleware' => 'auth'], function () {

    });
