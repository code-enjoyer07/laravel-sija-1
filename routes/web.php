<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
        Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');
        Route::prefix('siswa')->name('siswa.')->group(function () {
            // siswa
            Route::get('/', [SiswaController::class, 'index'])->name('index');
            Route::get('/buku', [SiswaController::class, 'buku_index'])->name('buku.index');
            Route::get('/peminjaman', [SiswaController::class, 'peminjaman_index'])->name('peminjaman.index');
        });


        Route::prefix('admin')->name('admin.')->group(function () {
            Route::get('/', [AdminController::class, 'admin_dashboard'])->name('index');
            Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
            Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
            Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
            Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
            Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');
            Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

            Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
            Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
            Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
            Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
            Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
            Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

            Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
            Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
            Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
            Route::get('/peminjaman/{id}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
            Route::put('/peminjaman/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
            Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');

            Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit.index');
            Route::get('/penerbit/create', [PenerbitController::class, 'create'])->name('penerbit.create');
            Route::post('/penerbit', [PenerbitController::class, 'store'])->name('penerbit.store');
            Route::get('/penerbit/{id}/edit', [PenerbitController::class, 'edit'])->name('penerbit.edit');
            Route::put('/penerbit/{id}', [PenerbitController::class, 'update'])->name('penerbit.update');
            Route::delete('/penerbit/{id}', [PenerbitController::class, 'destroy'])->name('penerbit.destroy');

            Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis.index');
            Route::get('/penulis/create', [PenulisController::class, 'create'])->name('penulis.create');
            Route::post('/penulis', [PenulisController::class, 'store'])->name('penulis.store');
            Route::get('/penulis/{id}/edit', [PenulisController::class, 'edit'])->name('penulis.edit');
            Route::put('/penulis/{id}', [PenulisController::class, 'update'])->name('penulis.update');
            Route::delete('/penulis/{id}', [PenulisController::class, 'destroy'])->name('penulis.destroy');

            Route::get('/user', [UserController::class, 'index'])->name('user.index');
            Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
            Route::post('/user', [UserController::class, 'store'])->name('user.store');
            Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
            Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
            Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

            Route::get('/rak', [RakController::class, 'index'])->name('rak.index');
            Route::get('/rak/create', [RakController::class, 'create'])->name('rak.create');
            Route::post('/rak', [RakController::class, 'store'])->name('rak.store');
            Route::get('/rak/{id}/edit', [RakController::class, 'edit'])->name('rak.edit');
            Route::put('/rak/{id}', [RakController::class, 'update'])->name('rak.update');
            Route::delete('/rak/{id}', [RakController::class, 'destroy'])->name('rak.destroy');
        });
    });
});
