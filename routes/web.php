<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeMitraController;
use App\Http\Controllers\AdminMitraController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\HomeLayananController;
use App\Http\Controllers\AdminLayananController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminCategoryPostController;
use App\Http\Controllers\AdminConfigurationController;
use App\Http\Controllers\AdminDokumenController;
use App\Http\Controllers\AdminGambarController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminMouController;
// use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/service/{id}', [HomeController::class, 'detail_service']);

Route::prefix('/home')->group(function () {
    Route::resource('/mitra', HomeMitraController::class);;
    Route::resource('/layanan', HomeLayananController::class);;
});



Route::get('/login', [HomeAuthController::class, 'index'])->name('login');
Route::post('/authenticate', [HomeAuthController::class, 'authenticate']);

Route::post('/registerStore', [HomeAuthController::class, 'store']);
Route::get('/register', [HomeAuthController::class, 'register']);
Route::get('/logout', [HomeAuthController::class, 'logout']);




Route::prefix('/admin/auth')->group(function () {
    Route::get('/', [AdminAuthController::class, 'index'])->middleware('guest');
    Route::post('/login', [AdminAuthController::class, 'login']);

    Route::get('/register', [AdminAuthController::class, 'register']);
    Route::post('/doRegister', [AdminAuthController::class, 'doRegsiter']);
    Route::get('/logout', [AdminAuthController::class, 'logout']);
});


Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/logout', [AdminAuthController::class, 'logout']);

    Route::get('/dashboard', function () {
        $data = [
            'content' => 'admin/dashboard/index'
        ];
        return view('admin/layouts/wrapper', $data);
    });

    Route::get('/user/is_active', [AdminUserController::class, 'is_active']);
    Route::resource('/user', AdminUserController::class);

    Route::get('/konfigurasi', [AdminConfigurationController::class, 'index']);
    Route::put('/konfigurasi/update', [AdminConfigurationController::class, 'update']);

    Route::resource('/mitra', AdminMitraController::class);
    Route::resource('/layanan', AdminLayananController::class);
    Route::resource('/gambar', AdminGambarController::class);

    Route::resource('/dokumen', AdminDokumenController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/mou', AdminMouController::class);
    Route::resource('/kategori', AdminServiceController::class);


    Route::get('/profil', [AdminProfileController::class, 'index']);
    Route::put('/profil/update/{id}', [AdminProfileController::class, 'update']);
    Route::get('/profil/is_mou_mitra', [AdminProfileController::class, 'is_mou_mitra']);


    Route::prefix('/posts')->group(function () {
        Route::resource('/post', AdminPostController::class);
        Route::resource('/kategori', AdminCategoryPostController::class);
    });
});
