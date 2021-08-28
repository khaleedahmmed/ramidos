<?php

namespace App\Http\Controllers\Website;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{id}', [ServiceController::class, 'serviceDetails'])->name('serviceDetails');
// Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::group(['middleware' => 'auth'], function () {

    });
