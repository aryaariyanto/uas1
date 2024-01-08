<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/paket', [App\Http\Controllers\PaketController::class, 'index']);
Route::get('/paket/create', [App\Http\Controllers\PaketController::class, 'create']);
Route::post('/paket', [App\Http\Controllers\PaketController::class, 'store']);
Route::get('/paket/edit/{id}', [App\Http\Controllers\PaketController::class, 'edit']);
Route::patch('/paket/{id}', [App\Http\Controllers\PaketController::class, 'update']);
Route::delete('/paket/{id}', [App\Http\Controllers\PaketController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\PelanggaController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelanggaController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelanggaController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelanggaController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelanggaController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelanggaController::class, 'destroy']);