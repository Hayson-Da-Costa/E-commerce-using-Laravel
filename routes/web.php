<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

Route::get('/register', [UserController::class, 'index'] )->name('user.index');
Route::post('/store', [UserController::class, 'store'] )->name('user.store');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/welcome', [LoginController::class, 'login'] )->name('login.login');

Route::get('/products', [ProductController::class, 'index']);

Route::get('/billing', function(){ return view('billing.billing');});
// Route::get('/cart', function(){ return view('cart.cart');});





Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');


