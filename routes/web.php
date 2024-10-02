<?php

use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function(): void {
    Route::get('/', [UserController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);       // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       // menampilkan data detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'level'], function() {
    Route::get('/', [LevelController::class, 'index']);          // menampilkan halaman awal level
    Route::post('/list', [LevelController::class, 'list']);      // menampilkan data level dalam bentuk json untuk datables
    Route::get('/create', [LevelController::class, 'create']);   // menampilkan halaman form tambah level
    Route::post('/', [LevelController::class, 'store']);         // menyimpan data level baru
    Route::get('/{id}', [LevelController::class, 'show']);       // menampilkan data detail level
    Route::get('/{id}/edit', [LevelController::class, 'edit']);  // menampilkan halaman form edit level
    Route::put('/{id}', [LevelController::class, 'update']);     // menyimpan perubahan data level
    Route::delete('/{id}', [LevelController::class, 'destroy']); // menghapus data level
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/list', [KategoriController::class, 'list']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::get('/{id}', [KategoriController::class, 'show']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [barangcontroller::class, 'index']);              // menampilkan halaman awal barang
    Route::post('/list', [barangcontroller::class, 'list']);          // menampilkan data barang dalam bentuk json untuk datatables
    Route::get('/create', [barangcontroller::class, 'create']);       // menampilkan halaman form tambah barang
    Route::post('/', [barangcontroller::class, 'store']);              // menyimpan data barang baru
    Route::get('/{id}', [barangcontroller::class, 'show']);            // menampilkan detail barang
    Route::get('/{id}/edit', [barangcontroller::class, 'edit']);       // menampilkan halaman form edit barang
    Route::put('/{id}', [barangcontroller::class, 'update']);          // menyimpan perubahan data barang
    Route::delete('/{id}', [barangcontroller::class, 'destroy']);      // menghapus data barang
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [supplierController::class, 'index']);              // menampilkan halaman awal supplier
    Route::post('/list', [supplierController::class, 'list']);          // menampilkan data supplier dalam bentuk json untuk datatables
    Route::get('/create', [supplierController::class, 'create']);       // menampilkan halaman form tambah supplier
    Route::post('/', [supplierController::class, 'store']);              // menyimpan data supplier baru
    Route::get('/{id}', [supplierController::class, 'show']);            // menampilkan detail supplier
    Route::get('/{id}/edit', [supplierController::class, 'edit']);       // menampilkan halaman form edit supplier
    Route::put('/{id}', [supplierController::class, 'update']);          // menyimpan perubahan data supplier
    Route::delete('/{id}', [supplierController::class, 'destroy']);      // menghapus data supplier
});
