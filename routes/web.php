<?php

use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController :: class, 'index' ]);         // menampilkan halaman awal user
    Route::post('/list', [UserController :: class, 'list' ]);     // menampilkan data user dalam bentuk json untuk datables
    Route::get('/create', [UserController :: class, 'create' ]);  // menampilkan halaman form tambah user
    Route::post('/', [UserController :: class, 'store' ]);        // menyimpan data user baru
    Route::get('/create_ajax', [UserController::class, 'create_ajax']); // Menampilkan halaman form tambah user Ajax
    Route::post('/ajax', [UserController::class, 'store_ajax']);     // Menyimpan data user baru Ajax
    Route::get('/{id}', [UserController :: class, 'show']);       // menampilkan detail user
    Route::get('/{id}/show_ajax', [UserController :: class, 'show_ajax']);       // menampilkan detail user
    Route::get('/{id}/edit', [UserController :: class, 'edit' ]); // menampilkan halaman form edit user
    Route::put('/{id}', [UserController :: class, 'update']);     // menyimpan perubahan data user
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); // Menampilkan halaman form edit user Ajax
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); // Menyimpan perubahan data user Ajax
    Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); // Untuk menampilkan form konfirmasi delete user Ajax
    Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // Untuk menghapus data user Ajax
    Route::delete('/{id}', [UserController :: class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);         // menampilkan halaman awal level
    Route::post('/list', [LevelController::class, 'list']);     // menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);  // menampilkan halaman form tambah level
    Route::post('/', [LevelController::class, 'store']);        // menyimpan data level baru
    Route::get('/create_ajax', [LevelController::class, 'create_ajax']); // Menampilkan halaman form tambah user Ajax
    Route::post('/ajax', [LevelController::class, 'store_ajax']);     // Menyimpan data user baru Ajax
    Route::get('/{id}', [LevelController::class, 'show']);      // menampilkan detail level
    Route::get('/{id}/show_ajax', [LevelController :: class, 'show_ajax']);
    Route::get('/{id}/edit', [LevelController::class, 'edit']); // menampilkan halaman form edit level
    Route::put('/{id}', [LevelController::class, 'update']);    // menyimpan perubahan data level
    Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']); // Menampilkan halaman form edit level Ajax
    Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']); // Menyimpan perubahan data level Ajax
    Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']); // Untuk menampilkan form konfirmasi delete level Ajax
    Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']); // Untuk menghapus data level Ajax
    Route::delete('/{id}', [LevelController::class, 'destroy']); // menghapus data level
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [kategoriController::class, 'index']);
    Route::post('/list', [kategoriController::class, 'list']);
    Route::get('/create', [kategoriController::class, 'create']);
    Route::post('/', [kategoriController::class, 'store']);
    Route::get('/create_ajax', [kategoriController::class, 'create_ajax']); 
    Route::post('/ajax', [kategoriController::class, 'store_ajax']);     
    Route::get('/{id}', [kategoriController::class, 'show']);
    Route::get('/{id}/show_ajax', [kategoriController :: class, 'show_ajax']);
    Route::get('/{id}/edit', [kategoriController::class, 'edit']);
    Route::put('/{id}', [kategoriController::class, 'update']);
    Route::get('/{id}/edit_ajax', [kategoriController::class, 'edit_ajax']); 
    Route::put('/{id}/update_ajax', [kategoriController::class, 'update_ajax']); 
    Route::get('/{id}/delete_ajax', [kategoriController::class, 'confirm_ajax']); 
    Route::delete('/{id}/delete_ajax', [kategoriController::class, 'delete_ajax']); 
    Route::delete('/{id}', [kategoriController::class, 'destroy']);
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [barangcontroller::class, 'index']);              // menampilkan halaman awal barang
    Route::post('/list', [barangcontroller::class, 'list']);          // menampilkan data barang dalam bentuk json untuk datatables
    Route::get('/create', [barangcontroller::class, 'create']);       // menampilkan halaman form tambah barang
    Route::post('/', [barangcontroller::class, 'store']);  
    Route::get('/create_ajax', [barangcontroller::class, 'create_ajax']); 
    Route::post('/ajax', [barangcontroller::class, 'store_ajax']);                 // menyimpan data barang baru
    Route::get('/{id}', [barangcontroller::class, 'show']);            // menampilkan detail barang
    Route::get('/{id}/show_ajax', [barangcontroller :: class, 'show_ajax']);
    Route::get('/{id}/edit', [barangcontroller::class, 'edit']);       // menampilkan halaman form edit barang
    Route::put('/{id}', [barangcontroller::class, 'update']);          // menyimpan perubahan data barang
    Route::get('/{id}/edit_ajax', [barangcontroller::class, 'edit_ajax']); 
    Route::put('/{id}/update_ajax', [barangcontroller::class, 'update_ajax']); 
    Route::get('/{id}/delete_ajax', [barangcontroller::class, 'confirm_ajax']); 
    Route::delete('/{id}/delete_ajax', [barangcontroller::class, 'delete_ajax']); 
    Route::delete('/{id}', [barangcontroller::class, 'destroy']);      // menghapus data barang
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [supplierController::class, 'index']);              // menampilkan halaman awal supplier
    Route::post('/list', [supplierController::class, 'list']);          // menampilkan data supplier dalam bentuk json untuk datatables
    Route::get('/create', [supplierController::class, 'create']);       // menampilkan halaman form tambah supplier
    Route::post('/', [supplierController::class, 'store']);              // menyimpan data supplier baru
    Route::get('/create_ajax', [supplierController::class, 'create_ajax']); 
    Route::post('/ajax', [supplierController::class, 'store_ajax']);
    Route::get('/{id}', [supplierController::class, 'show']);            // menampilkan detail supplier
    Route::get('/{id}/show_ajax', [supplierController :: class, 'show_ajax']);
    Route::get('/{id}/edit', [supplierController::class, 'edit']);       // menampilkan halaman form edit supplier
    Route::put('/{id}', [supplierController::class, 'update']);          // menyimpan perubahan data supplier
    Route::get('/{id}/edit_ajax', [supplierController::class, 'edit_ajax']); 
    Route::put('/{id}/update_ajax', [supplierController::class, 'update_ajax']); 
    Route::get('/{id}/delete_ajax', [supplierController::class, 'confirm_ajax']); 
    Route::delete('/{id}/delete_ajax', [supplierController::class, 'delete_ajax']); 
    Route::delete('/{id}', [supplierController::class, 'destroy']);      // menghapus data supplier
});

// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);