<?php

use App\Http\Controllers\FornecedorController;
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

Route::get('/', [FornecedorController::class, 'index'])->name('fornecedores.index');
Route::get('/fornecedores/create', [FornecedorController::class, 'create'])->name('fornecedores.create');
Route::post('/fornecedores', [FornecedorController::class, 'store'])->name('fornecedores.store');
Route::get('/fornecedores/{id}/edit', [FornecedorController::class, 'edit'])->name('fornecedores.edit');
Route::put('/fornecedores/{id}', [FornecedorController::class, 'update'])->name('fornecedores.update');
Route::get('/fornecedores/{id}', [FornecedorController::class, 'destroy'])->name('fornecedores.destroy');
