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
use App\Http\Controllers\AdminGambarController;

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
    $data = ['content'  => 'home/home/index'];
    return view('home/layouts/wrapper', $data);
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

    Route::resource('/user', AdminUserController::class);

    Route::get('/konfigurasi', [AdminConfigurationController::class, 'index']);
    Route::put('/konfigurasi/update', [AdminConfigurationController::class, 'update']);

    Route::resource('/mitra', AdminMitraController::class);
    Route::resource('/layanan', AdminLayananController::class);
    Route::resource('/gambar', AdminGambarController::class);

    Route::resource('/banner', AdminBannerController::class);


    Route::get('/profil', [AdminProfileController::class, 'index']);
    Route::put('/profil/update/{id}', [AdminProfileController::class, 'update']);


    Route::prefix('/posts')->group(function () {
        Route::resource('/post', AdminPostController::class);
        Route::resource('/kategori', AdminCategoryPostController::class);
    });
});

Route::prefix('/home')->group(function () {
    Route::resource('/mitra', HomeMitraController::class);;
    Route::resource('/layanan', HomeLayananController::class);;
});
