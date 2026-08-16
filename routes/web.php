<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HajjController;
use App\Http\Controllers\SinglePageController;
use App\Http\Controllers\UmrahController;

Route::controller(SinglePageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/moderators', 'moderators')->name('moderators');
    Route::get('/whyus', 'whyus')->name('whyus');
    Route::get('/reviews', 'reviews')->name('reviews');
    Route::get('/media', 'media')->name('media');
});

Route::controller(HajjController::class)->group(function () {
    Route::get('/hajj', 'index')->name('hajj.index');
    Route::get('/hajj/{hajj_package}', 'show')->name('hajj.show');
    Route::post('/hajj', 'store')->name('hajj.store');
});

Route::controller(UmrahController::class)->group(function () {
    Route::get('/umrah', 'index')->name('umrah.index');
    Route::get('/umrah/{umrah_package}', 'show')->name('umrah.show');
    Route::post('/umrah', 'store')->name('umrah.store');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'store')->name('contact.store');
});