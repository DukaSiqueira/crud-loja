<?php

use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Api resource substitui a criação de rota por rota (GET/POST...)
Route::apiResource('loja', LojaController::class);
Route::apiResource('produto', ProdutoController::class);
