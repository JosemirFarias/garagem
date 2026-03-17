<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\MotoristaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('motoristas', MotoristaController::class);
Route::resource('carros', CarroController::class);
