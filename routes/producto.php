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
Route::get('/bandeja', [CreaProductosController::class, 'bandejaProducto'])
                ->name('creaProductos.bandejaProducto');

Route::post('/bandeja/{id_producto}', [CreaProductosController::class, 'destroy'])
                ->name('creaProductos.destroy');

Route::get('/editaProducto/{id_producto}', [CreaProductosController::class,'editaProducto'])->name('producto.editaProducto');

Route::post('/edit/{id_producto}', [CreaProductosController::class, 'edit'])->name('producto.edit');

//Route::get('/indexNav', [NavHeaderController::class,'indexNav'])->name('navHeader.indexNav');


?>