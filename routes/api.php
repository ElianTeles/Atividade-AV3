<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('produto',[ProdutoController::class,'listarTodos']);
Route::post('produto',[ProdutoController::class,'criarProduto']);
Route::patch('produto/{id}',[ProdutoController::class,'atualizarProduto']);
Route::delete('produto/{id}',[ProdutoController::class,'deletarProduto']);

Route::get('categoria',[CategoriaController::class,'listarTodos']);
Route::post('categoria',[CategoriaController::class,'criarCategoria']);
Route::patch('categoria/{id}',[CategoriaController::class,'atualizarCategoria']);
Route::delete('categoria/{id}',[CategoriaController::class,'deletarCategoria']);

Route::get('pedido',[PedidoController::class,'listarTodos']);
Route::post('pedido',[PedidoController::class,'criarPedido']);
Route::patch('pedido/{id}',[PedidoController::class,'atualizarPedido']);
Route::delete('pedido/{id}',[PedidoController::class,'deletarPedido']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
