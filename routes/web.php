<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProdukController::class, 'index']);
Route::get('/product', [ProdukController::class, 'getAll']);
Route::get('/actions/tambahData', [ProdukController::class, 'createViews']);
Route::post('/product/store', [ProdukController::class, 'store']);
Route::get('/actions/editData/{id}', [ProdukController::class, 'edit']);
Route::put('/product/update/{id}', [ProdukController::class, 'update']);
Route::get('/actions/deleteData/{id}', [ProdukController::class, 'delete']);

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);


Route::get('/registration', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/registration', [AuthController::class, 'register']);




