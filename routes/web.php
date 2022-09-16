<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', [ClientsController::class, 'index'])->name('client');
// Route::post('/order-create', [UsuariosController::class, 'store'])->name('create');
// Route::put('/orders', [UsuariosController::class, 'edit'])->name('edit');
// Route::put('/orders/{id}', [UsuariosController::class, 'edit'])->name('edit');