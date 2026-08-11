<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HajjController;
use App\Http\Controllers\SinglePageController;
use App\Http\Controllers\UmrahController;

Route::controller(SinglePageController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/services', 'services');
    Route::get('/moderators', 'moderators');
    Route::get('/whyus', 'whyus');
    Route::get('/reviews', 'reviews');
    Route::get('/media', 'media');
});

Route::controller(HajjController::class)->group(function () {
    Route::get('/hajj', 'index');
    Route::get('/hajj/{hajj_package}', 'show');
    Route::post('/hajj', 'store');
});

Route::controller(UmrahController::class)->group(function () {
    Route::get('/umrah', 'index');
    Route::get('/umrah/{umrah_package}', 'show');
    Route::post('/umrah', 'store');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index');
    Route::post('/contact', 'store');
});
