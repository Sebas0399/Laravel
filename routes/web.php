<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal');
});
Route::get('/consumo', function () {
    return view('secundaria');
});


Route::post('/procesa', [PostController::class, 'store'])->name('storeFormulario');
Route::resource('usuarios', UsuarioController::class);
Route::resource('ingredientes', IngredientesController::class);
Route::resource('pedidos', PedidosController::class);
Route::resource('pizzas', PizzaController::class);