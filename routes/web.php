<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\RegistrarContratoController;
use App\Http\Controllers\RegistrarPaqueteController;
use App\Http\Controllers\UsuariosController;
use App\Models\Contrato;
use App\Models\Paquete;
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

Route::get('/', function () {
    $paquetes = Paquete::all();
    return view('index', ['paquetes' => $paquetes]);
})->name('index');

Route::get('/Contacto', [ContactoController::class, 'mostrarcontacto'])->name('mostrarcontacto');
Route::get('/Contrato', [ContactoController::class, 'mostrarContratar'])->name('mostrarContratar');
Route::get('/Acerca', [ContactoController::class, 'mostrarAcerca'])->name('mostrarAcerca');
Route::get('/Login', [ContactoController::class, 'mostrarLogin'])->name('mostrarLogin');

Route::get('/registrar-paquete', [RegistrarPaqueteController::class, 'index'])->name('registrarPaquete');
Route::post('/registrar-paquete', [RegistrarPaqueteController::class, 'registro'])->name('registrarPaquete');

Route::post('/registrar-contrato', [RegistrarContratoController::class, 'registro'])->name('registrarContrato');

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('mostrarUsuarios');
Route::get('/contrataciones', function () {
    $contrataciones = Contrato::all();
    return view('contrataciones', ['contrataciones' => $contrataciones]);
})->name('mostrarContrataciones');

Route::get('/eliminar-paquete/{id}', [RegistrarPaqueteController::class, 'eliminar'])->name('eliminarPaquete');
Route::get('/eliminar-usuario/{id}', [UsuariosController::class, 'eliminar'])->name('eliminarUsuario');

require __DIR__ . '/auth.php';
