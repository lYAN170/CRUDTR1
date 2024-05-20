<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReservacioneController;
use App\Http\Controllers\PromocioneController;



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
Route::resource('clientes', ClienteController::class);
Route::get('clientes', [ClienteController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Rutas para el controlador Clientes
Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
});
// Rutas para reservaciones
Route::prefix('reservaciones')->group(function () {
    Route::get('/', [ReservacioneController::class, 'index'])->name('reservaciones.index');
    Route::get('/create', [ReservacioneController::class, 'create'])->name('reservaciones.create');
    Route::post('/', [ReservacioneController::class, 'store'])->name('reservaciones.store');
    Route::get('/{reservacion}', [ReservacioneController::class, 'show'])->name('reservaciones.show');
    Route::get('/{reservacion}/edit', [ReservacioneController::class, 'edit'])->name('reservaciones.edit');
    Route::put('/{reservacion}', [ReservacioneController::class, 'update'])->name('reservaciones.update');
    Route::delete('/{reservacion}', [ReservacioneController::class, 'destroy'])->name('reservaciones.destroy');
});

// Rutas para promociones
Route::prefix('promociones')->group(function () {
    Route::get('/promociones', [PromocioneController::class, 'index'])->name('promociones.index');
    Route::get('/promociones/create', [PromocioneController::class, 'create'])->name('promociones.create');
    Route::post('/promociones', [PromocioneController::class, 'store'])->name('promociones.store');
    Route::get('/promociones/{promocione}', [PromocioneController::class, 'show'])->name('promociones.show');
    Route::get('/promociones/{promocione}/edit', [PromocioneController::class, 'edit'])->name('promociones.edit');
    Route::put('/promociones/{promocione}', [PromocioneController::class, 'update'])->name('promociones.update');
    Route::delete('/promociones/{promocione}', [PromocioneController::class, 'destroy'])->name('promociones.destroy');
});


