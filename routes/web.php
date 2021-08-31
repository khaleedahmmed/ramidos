<?php

namespace App\Http\Controllers\Website;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{id}', [ServiceController::class, 'serviceDetails'])->name('serviceDetails');
Route::post('/subscribe', [ContactController::class, 'subscribe'])->name('subscribe');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactRequest'])->name('contact.request');
Route::get('/request', [RequestController::class, 'index'])->name('get.request');
Route::post('/request', [RequestController::class, 'sendRequest'])->name('send.request');
// Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::group(['middleware' => 'auth'], function () {

    });
