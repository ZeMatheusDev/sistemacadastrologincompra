<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {;
    return view('home');
})->name('home');

Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastroProduto', function () {
    return view('cadastroProduto');
})->name('cadastroProduto');

Route::get('/comprar', [UsuarioController::class, 'comprarIndex'])->name('compra');

Route::get('/compras', [UsuarioController::class, 'comprasUsuario'])->name('compras');

Route::post('teste', [UsuarioController::class, 'teste'])->name('teste');

Route::post('cadastrar', [RegistroController::class, 'cadastrar'])->name('cadastrar');

Route::post('cadastroProduto', [AdminController::class, 'cadastroProduto'])->name('cadastroProduto');

Route::post('logar', [LoginController::class, 'logar'])->name('logar');

Route::post('excluirCompra', [UsuarioController::class, 'excluirCompra'])->name('excluirCompra');

Route::post('comprarProduto', [UsuarioController::class, 'comprarProduto'])->name('comprarProduto');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');



