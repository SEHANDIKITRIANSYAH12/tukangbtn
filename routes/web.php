<?php

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('home'); // Ganti 'welcome' dengan view yang sesuai
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/jasa1', function () {
    return view('jasa1');
});

Route::get('/jasa2', function () {
    return view('jasa2');
});

Route::get('/jasa3', function () {
    return view('jasa3');
});

Route::get('/jasa4', function () {
    return view('jasa4');
});

Route::get('/jasa5', function () {
    return view('jasa5');
});

Route::get('/jasa6', function () {
    return view('jasa6');
});

Route::get('/jasa7', function () {
    return view('jasa7');
});

Route::get('/jasa8', function () {
    return view('jasa8');
});

Route::get('/jasa9', function () {
    return view('jasa9');
});

Route::get('/jasa10', function () {
    return view('jasa10');
});

Route::get('/jasa11', function () {
    return view('jasa11');
});

Route::get('/jasa12', function () {
    return view('jasa12');
});

Route::get('/jasa13', function () {
    return view('jasa13');
});



Route::get('/contact', function () {
    return view('contact'); // Ganti dengan nama view Anda
})->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// Fallback route for 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
