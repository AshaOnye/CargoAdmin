<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/shipments', [App\Http\Controllers\ShipmentController::class, 'index'])->name('shipments.index');

Route::get('/payments', [App\Http\Controllers\PaymentController::class, 'index'])->name('payments.index');

Route::get('/quotations', [App\Http\Controllers\QuotationController::class, 'index'])->name('quotation.index');

Route::post('/create', [App\Http\Controllers\QuotationController::class, 'create'])->name('quotation.create');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('auth.register');

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'signup']);

Route::post('/loginnow', [App\Http\Controllers\Auth\LoginController::class, 'LoginNow'])->name('auth.loginnow');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('auth.login');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
