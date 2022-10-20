<?php

use App\Http\Controllers\InventarisController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;
use App\Models\Inventaris;
use App\Models\Category;
use App\Models\Lokasi;
use App\Models\Peminjaman;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

// inventaris
Route::get('/inventaris', [InventarisController::class, 'index']);
Route::get('/addInv', [InventarisController::class, 'addInv']);
Route::get('/show-inv/{id}', [InventarisController::class, 'getInvById']);
Route::resource('/inventaris',InventarisController::class);
Route::get('/delete-inv/{id}',[InventarisController::class, 'destroy']);
Route::get('/edit-inv/{id}',[InventarisController::class, 'edit']);
Route::post('edit-inv',[InventarisController::class, 'update'])->name('inventaris_updated');

// lokasi
Route::get('/lokasi', [LokasiController::class, 'index']);
Route::get('/addLokasi', [LokasiController::class, 'addLokasi']);
Route::resource('/lokasi',LokasiController::class);
Route::get('/edit-lokasi/{id}',[LokasiController::class, 'edit']);
Route::post('edit-lokasi',[LokasiController::class, 'update'])->name('lokasi_updated');
Route::get('/delete-lokasi/{id}',[LokasiController::class, 'destroy']);

// kategori
Route::get('/categories', [CategoryController::class, 'index']);


// peminjaman
Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::get('/addPinjam', [PeminjamanController::class, 'addPinjam']);
Route::resource('/peminjaman',PeminjamanController::class);
Route::get('/delete-peminjaman/{id}',[PeminjamanController::class, 'destroy']);

// user
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
