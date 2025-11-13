<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('productos', ProductoController::class);
Route::resource('vendedores', VendedorController::class)->parameters([
    'vendedores' => 'vendedor'
]);

Route::resource('categorias', CategoriaController::class);