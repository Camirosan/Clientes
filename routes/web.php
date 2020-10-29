<?php

use App\Http\Controllers\PagesController;
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

// Metodo GET

Route::get('/', [PagesController::class, 'inicio']);

// Route::get('test/{id_cliente?}', function($id_cliente = ''){
//     return 'esta es la vista de busqueda de clientes : '.$id_cliente;
//     // return view('clientes')
// })->where('id_cliente', '[0-9]+');

// Route::get('clientes/{id_cliente?}', [PagesController::class, 'clientes'])->name('clientes'); 
Route::get('clientes', [PagesController::class, 'clientes'])->name('clientes');

Route::get('registro', [PagesController::class, 'registro'])->name('registro'); 

// Metodo POST

Route::post('registro', [PagesController::class, 'registrar'])->name('clietnes.crear');

Route::post('clientes', [PagesController::class, 'consulta'])->name('clientes.buscar');