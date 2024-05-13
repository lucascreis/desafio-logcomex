<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/pessoa', [PessoaController::class, 'index']);

Route::get('/pessoa/{pessoa}', [PessoaController::class, 'show']);