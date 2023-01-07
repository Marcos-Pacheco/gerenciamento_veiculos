<?php

use App\Http\Controllers\Api\ManutencaoController;
use App\Http\Controllers\Api\TipoServicoController;
use App\Http\Controllers\Api\TipoVeiculoController;
use App\Http\Controllers\Api\VeiculoController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('manutencoes',ManutencaoController::class);
Route::apiResource('tipos-veiculos',TipoVeiculoController::class);
Route::apiResource('tipos-servicos',TipoServicoController::class);
Route::apiResource('veiculos',VeiculoController::class);