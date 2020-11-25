<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Perros\Perros;
use App\Http\Controllers\Gatos\Gatos;

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

//Ruta
Route::get('/', [Administracion::class,'index']);

//Ruta Perros Informacion
Route::get('perros/informacion', [Perros::class,'informacion']);

//Ruta Perros Productos
Route::get('perros/productos', [Perros::class,'productos']);

//Ruta Gatos Informacion
Route::get('gatos/informacion', [Gatos::class,'informacion']);

//Ruta Gatos Productos
Route::get('gatos/productos', [Gatos::class,'productos']);

//Ruta Contactos
Route::get('contactos', [Administracion::class,'contacto']);