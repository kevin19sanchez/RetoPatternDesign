<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/climas', [ApiController::class, 'index']);
Route::get('/climas/{tipo}', [ApiController::class, 'show']);
