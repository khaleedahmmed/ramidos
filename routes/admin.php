<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'auth', 'prefix'=> 'admin'], function () {
Route::group(['middleware' => 'admin'], function () {
Route::get('/', function () {

    return view('admin.index');
})->name('dashboard');

    Route::resource('/permissions', PermissionController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/admins', AdminController::class);
    Route::resource('/abouts', AboutController::class);
    Route::resource('/clients', ClientController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/requests', RequestController::class);
    Route::resource('/sliders', SliderController::class);
    Route::resource('/terms', TermController::class);
    Route::resource('/sections', SectionController::class);
    Route::resource('/countries', CountryController::class);
    Route::resource('/contacts', ContactController::class);
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');
    Route::get('sectionOne', [SectionController::class, 'sectionOne'])->name('sectionOne.index');
    Route::post('sectionOne', [SectionController::class, 'updateSectionOne'])->name('sectionOne.update');
    Route::get('sectionTwo', [SectionController::class, 'sectionTwo'])->name('sectionTwo.index');
    Route::post('sectionTwo', [SectionController::class, 'updatesectionTwo'])->name('sectionTwo.update');
    Route::get('sectionThree', [SectionController::class, 'sectionThree'])->name('sectionThree.index');
    Route::post('sectionThree', [SectionController::class, 'updatesectionThree'])->name('sectionThree.update');

});
});
