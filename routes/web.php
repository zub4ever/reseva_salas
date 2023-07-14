<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('/reservas',[App\Http\Controllers\Reservas\ReservasController::class, 'index'])->name('inicioReserva');
Route::get('/reservas/novaReserva',[App\Http\Controllers\Reservas\ReservasController::class, 'create'])->name('nova.reserva');
Route::post('/reservas/novaReserva',[App\Http\Controllers\Reservas\ReservasController::class, 'store'])->name('reservas.store');
Route::get('/reservas/editar/{id}',[App\Http\Controllers\Reservas\ReservasController::class, 'edit'])->name('editarReserva');
Route::put('/reservas/editar/{id}', [App\Http\Controllers\Reservas\ReservasController::class, 'update'])->name('reservas.update');
Route::get('/reservas/detalhes/{id}',[App\Http\Controllers\Reservas\ReservasController::class, 'show'])->name('showDetalhes');

Route::delete('/deletar/{id}',[App\Http\Controllers\Reservas\ReservasController::class, 'destroy'])->name('destroy');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


