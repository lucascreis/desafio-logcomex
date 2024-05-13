<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::get('/pessoa', [PessoaController::class, 'index']);
Route::get('/pessoa/{id}', [PessoaController::class, 'show']);
