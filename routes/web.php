<?php

use App\Http\Controllers\AdjustmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PortoController;
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



Route::get('/detail/{token}', [LandingController::class, 'detail']);

Route::get('/', [LandingController::class, 'index']);

// LOGIN
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group (function(){

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/adjustment', [AdjustmentController::class, 'index']);
Route::get('/about/edit/{id}', [AdjustmentController::class, 'about_edit']);
Route::post('/about/edit/{id}', [AdjustmentController::class, 'about_edit_action'])->name('about_edit');
Route::get('/service/edit/{id}', [AdjustmentController::class, 'service_edit']);
Route::post('/service/edit/{id}', [AdjustmentController::class, 'service_edit_action'])->name('service_edit');

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/tambah', [KategoriController::class, 'tambah_action'])->name('tambah_action');
Route::post('/kategori/edit/{id}', [KategoriController::class, 'edit_action'])->name('edit_action');
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus']);

Route::get('/portofolio', [PortoController::class, 'index']);
Route::get('/portofolio/tambah', [PortoController::class, 'tambah']);
Route::post('/portofolio/tambah', [PortoController::class, 'tambah_action'])->name('porto_tambah');
Route::post('/upload', [PortoController::class, 'upload'])->name('ckeditor.upload');
Route::get('/portofolio/hapus/{id}', [PortoController::class, 'hapus']);
Route::get('/portofolio/edit/{id}', [PortoController::class, 'edit']);
Route::post('/portofolio/edit/{id}', [PortoController::class, 'edit_action'])->name('edit_porto');

Route::get('/logout', [AuthController::class, 'logout']);
});
