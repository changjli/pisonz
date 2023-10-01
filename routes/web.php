<?php

use App\Http\Controllers\LoginController;
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

// admin 

//login
Route::get('/admin/login', [LoginController::class, 'index']);

Route::post('/admin/register', [LoginController::class, 'register']);

Route::post('/admin/login', [LoginController::class, 'login']);
