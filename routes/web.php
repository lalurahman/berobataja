<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\MitraCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Models\Layanan;
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

// auth
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login_process'])->name('login-process');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register-process');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'login:superadmin']], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
    // mitra kategory
    Route::get('/mitra-category', [MitraCategoryController::class, 'index'])->name('admin-mitra-category');
    Route::post('/mitra-category', [MitraCategoryController::class, 'store'])->name('admin-add-mitra-category');
    // user
    Route::get('/user/admin', [UserController::class, 'admin'])->name('admin-user-admin');
    Route::get('/user/mitra', [UserController::class, 'mitra'])->name('admin-user-mitra');
    Route::get('/user/customer', [UserController::class, 'customer'])->name('admin-user-customer');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mitra', [HomeController::class, 'mitra'])->name('mitra');
Route::get('/{username}', [HomeController::class, 'profil_mitra'])->name('profil-mitra');