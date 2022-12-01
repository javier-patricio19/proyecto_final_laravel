<?php

use App\Http\Controllers\ContactoController;
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
    return view('index');
})->name('index');

Route::get('/Contacto', [ContactoController::class, 'mostrarcontacto'])->name('mostrarcontacto');
Route::get('/Contrato', [ContactoController::class, 'mostrarContratar'])->name('mostrarContratar');
Route::get('/Acerca', [ContactoController::class, 'mostrarAcerca'])->name('mostrarAcerca');
Route::get('/Login', [ContactoController::class, 'mostrarLogin'])->name('mostrarLogin');

require __DIR__ . '/auth.php';
