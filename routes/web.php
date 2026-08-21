<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfGeneratorController;

Route::get('/form', function () {
    return view('form');
});

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{id}', [UserController::class, 'get']);

Route::post('/store', [UserController::class, 'store']);

Route::get('/resume/{id}', [PdfGeneratorController::class, 'index']);