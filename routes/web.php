<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MensajeController;

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

Route::get('/clientes/cargar-csv', [ClientController::class, 'cargarCSVForm'])->name('clientes.cargarCSVForm');
Route::post('/clientes/cargar-csv', [ClientController::class, 'cargarCSV'])->name('clientes.cargarCSV');
Route::get('/enviar-mensaje', [MensajeController::class, 'formulario'])->name('mensaje.formulario');
Route::post('/enviar-mensaje', [MensajeController::class, 'enviar'])->name('mensaje.enviar');
Route::get('/mensaje_de_prueba', [MensajeController::class, 'formulario_dos'])->name('mensaje.formulario');
Route::post('/mensaje_de_prueba_envio', [MensajeController::class, 'dos_enviar'])->name('mensaje_prueba_dos.enviar');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
