<?php
use App\Http\Controllers\LevelController;
use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\userController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/level', action: [LevelController :: class, 'index']);

Route::get(uri: '/barang',action: [barangcontroller :: class, 'index']);

Route::get(uri: '/kategori',action: [kategoriController :: class, 'index']);

Route::get(uri: '/user',action: [kategoriController :: class, 'index']);
Route::get(uri: '/user',action: [userController :: class, 'index']);

Route::get(uri: '/user/tambah', action: [userController::class, 'tambah']);

Route::post(uri: '/user/tambah_simpan', action: [userController :: class, 'tambah_simpan']);

Route :: get(uri: '/user/ubah/{id}', action: [userController :: class, 'ubah']);

Route :: get(uri: '/user/ubah_simpan/{id}', action: [userController :: class, 'ubah_simpan']);

Route:: get(uri: '/user/hapus/{id}', action: [userController :: class, 'hapus']);
