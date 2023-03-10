<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalletaController;
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

Route::get('/', HomeController::class);

Route::get("Galleta", [GalletaController::class, 'index']);

Route::get('Galleta/create', [GalletaController::class, 'create']);

Route::get('Galleta/{tusuerte}', [GalletaController::class, 'show']);

