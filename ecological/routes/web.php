<?php

use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Page À propos
Route::get('/about', function () {
    return view('about');
})->name('about');

// Page Services
Route::get('/services', function () {
    return view('service');
})->name('services');

// Page Partenariat
Route::get('/partenariat', function () {
    return view('partenariat');
})->name('partenariat');

// Page Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Page Politique de confidentialité
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

// Page Conditions d'utilisation
Route::get('/terms', function () {
    return view('terms');
})->name('terms');

// Page Actualités
Route::get('/actualites', function () {
    return view('actualite');
})->name('actualites');