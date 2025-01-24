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

Route::get('/contact', function () {
    return view('contact'); // Ganti dengan nama view Anda
})->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

