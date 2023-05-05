<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/stok', [IndexController::class, 'show']);
Route::get('/history', [IndexController::class, 'history']);
Route::post('/add', [IndexController::class, 'store']);
Route::post('/transaction', [IndexController::class, 'transaction']);
Route::get('/tambah', [IndexController::class, 'create']);
Route::get('/error', [IndexController::class, 'alert']);
Route::get('/edit/{id}', [IndexController::class, 'edit']);
Route::post('/update/{id}', [IndexController::class, 'update']);
Route::get('/delete/{id}', [IndexController::class, 'destroy']);
