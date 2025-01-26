<?php

use Illuminate\Support\Facades\Route;

// Home routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return redirect('/');
});

// Service routes
Route::get('/jasa1', function () {
    return view('jasa1');
})->name('jasa1');

Route::get('/jasa2', function () {
    return view('jasa2');
})->name('jasa2');

Route::get('/jasa3', function () {
    return view('jasa3');
})->name('jasa3');

Route::get('/jasa4', function () {
    return view('jasa4');
})->name('jasa4');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// Fallback route for 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
