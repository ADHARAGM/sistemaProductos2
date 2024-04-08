<?php

use App\Http\Controllers\CreaProductosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\CategoriasController;


Route::resources([
	'categorias'=>CategoriasController::class,
	'sucursales'=>SucursalesController::class,
]);
Route::post('/createProducto', [CreaProductosController::class,'createProducto'])->name('producto.createProducto');
//Route::get('/indexNav', [NavHeaderController::class,'indexNav'])->name('navHeader.indexNav');


?>