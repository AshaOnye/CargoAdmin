<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParcelController;

use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\Auth\RegisterController; // Add this line

use App\Http\Controllers\AdminLoginController;
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
    return view('auth.login');
});


Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);
Route::post('/admin/logout', [AdminLoginController::class, 'logout']);


Route::get('/admin/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminRegisterController::class, 'register']);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/shipments', [App\Http\Controllers\ShipmentController::class, 'index'])->name('shipments.index');
Route::get('/payments', [App\Http\Controllers\PaymentController::class, 'index'])->name('payments.index');
Route::get('/quotations', [App\Http\Controllers\QuotationController::class, 'index'])->name('quotation.index');

Route::post('/create', [App\Http\Controllers\QuotationController::class, 'billing'])->name('quotation.create');
Route::get('/create', [App\Http\Controllers\QuotationController::class, 'create'])->name('quotation.create');
// Example in web.php
Route::get('/quotation/{id}', [App\Http\Controllers\QuotationController::class, 'show'])->name('quotation.detail');


Route::post('/loginnow', [App\Http\Controllers\Auth\LoginController::class, 'LoginNow'])->name('auth.loginnow');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('auth.login');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
