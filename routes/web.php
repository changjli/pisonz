<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;

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
Route::get('/admin/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

Route::post('/admin/login', [LoginController::class, 'login'])->middleware('guest');

Route::post('/admin/logout', [LoginController::class, 'logout'])->middleware('auth');

// Route::post('/admin/register', [LoginController::class, 'register'])->middleware('guest');

// admin transaction
Route::resource('/admin/transaction', TransactionController::class)->middleware('auth');

// admin user (super admin)
Route::resource('/admin/user', UserController::class)->middleware('auth');

route::view('/home', 'home');

Route::resource("/game", GameController::class);

Route::resource("/category", CategoryController::class);

Route::resource("/product", ProductController::class);

Route::resource("/payment", PaymentController::class);
