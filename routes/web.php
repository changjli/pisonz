<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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

// admin
Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', function () {
            return view('home');
        });

        Route::post('/logout', [LoginController::class, 'logout']);

        Route::resource('/users', UserController::class);

        Route::resource('/games', GameController::class);
        Route::resource('/categories', CategoryController::class);
        Route::resource('/products', ProductController::class);
        Route::resource('/payments', PaymentController::class);
        Route::resource('/transactions', TransactionController::class);
        Route::resource('/promos', PromoController::class);
        Route::resource('/banners', BannerController::class);
    });

    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [LoginController::class, 'index']);
        Route::post('/login', [LoginController::class, 'login'])->name('login');
        // Route::get('/register', [RegisterController::class, 'index']);
    });
});

// user 
Route::get('/', [FrontController::class, 'home']);

Route::get('/order/{game}', [FrontController::class, 'order']);

Route::get('/payment', [FrontController::class, 'payment']);

Route::post('/receipt', [FrontController::class, 'receipt']);

Route::get('/tracking', [TransactionController::class, 'tracking']);
