<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
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

Route::get('/admin/buscar_cliente', [ClienteController::class, 'buscar']);
Route::post('/admin/cliente', [ClienteController::class, 'guardar_cliente']);

// Realizar un pedido
Route::post('/admin/pedido', [PedidoController::class, 'store']);
