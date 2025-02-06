<?php

use App\Http\Controllers\rdvController;
use Illuminate\Support\Facades\Route;

Route::get('/', [rdvController::class, 'rdvView']);
Route::get('/formRdv', [rdvController::class, 'form1Rdv']);
Route::post('/salvarresponsavel', [rdvController::class, 'salvarResponsavel']);
Route::get('/form2', [rdvController::class, 'viewForm2']);
