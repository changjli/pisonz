<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

// admin login
Route::get('/admin/login', [LoginController::class, 'index'])->middleware('guest');

Route::post('/admin/login', [LoginController::class, 'login'])->middleware('guest');

Route::post('/admin/logout', [LoginController::class, 'logout'])->middleware('auth');

// Route::post('/admin/register', [LoginController::class, 'register'])->middleware('guest');

// admin transaction
Route::resource('/admin/transaction', TransactionController::class)->middleware('auth');

// admin user (super admin)
Route::resource('/admin/user', UserController::class);
