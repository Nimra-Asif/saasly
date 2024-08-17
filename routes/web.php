<?php

use App\Http\Controllers\publicController;
use Illuminate\Support\Facades\Route;

// Corrected route
Route::get('/', [publicController::class, 'index'])->name('homepage');
