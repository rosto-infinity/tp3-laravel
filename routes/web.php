<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;


Route::get('/', function () {
    return view('welcome');
})->name('acceil');


Route::get('/etudiant',[EtudiantController::class,'etudiant']) ->name('etudiant');

