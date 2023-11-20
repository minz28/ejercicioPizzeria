<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SolicitudController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LoginController::class, 'loginGet'])->name('login');
Route::post('/', [LoginController::class, 'loginPost']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::controller(SolicitudController::class)->prefix('solicitudes')->group(function(){
    Route::get('/', 'listar')->name('solicitudes.listar');
    Route::get('/ingresar', 'addSolicitudGet');
    Route::post('/ingresar', 'addSolicitudPost');
});