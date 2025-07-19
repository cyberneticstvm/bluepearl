<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/products', 'products')->name('products');
        Route::get('/services', 'services')->name('services');
        Route::get('/blogs', 'blogs')->name('blogs');
        Route::get('/contact', 'contact')->name('contact');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
        Route::get('/message', 'message')->name('message');
    });
});
