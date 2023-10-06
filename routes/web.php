<?php

use App\Http\Controllers\PromoController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiplomeController;
use App\Models\Eleve;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');

//***********************Route d'affichage  de la page home**********************************/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//*******************Route pour les méthodes du controller diplôme**************************/
Route::resource('/diplomes', DiplomeController::class);

//*******************Route pour les méthodes du controller eleve**************************/
Route::resource('/eleves', EleveController::class);

//*******************Route pour les méthodes du controller formateur**************************/
Route::resource('/formateurs', FormateurController::class);

//*******************Route pour les méthodes du controller promo**************************/
Route::resource('/promos', PromoController::class);



// Méthode fallback() en dernière position
Route::fallback(function () {
    return view('404'); // la vue 404.blade.php
});
