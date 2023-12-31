<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\produkMasukController;
use App\Http\Controllers\produkKeluarController;
use App\Http\Controllers\TransaksiController;
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


Route::get('/barangTersedia', function () {
    return view('barangTersedia.index');
})->middleware(['auth', 'verified'])->name('barangTersedia');



Route::get('/barangHabis', function () {
    return view('barangHabis/index');
})->middleware(['auth', 'verified'])->name('barangHabis');


// Route::get('/barangMasuk', function () {
//     return view('barangMasuk');
// })->middleware(['auth', 'verified'])->name('barangMasuk');

Route::middleware('auth')->group(function () {

    Route::get('/barangMasuk', [produkMasukController::class, 'index'])->name('barangMasuk');
    Route::get('/barangMasuk/create', [produkMasukController::class, 'create'])->name('barangMasuk.create');
    Route::post('/barangMasuk', [produkMasukController::class, 'store'])->name('barangMasuk.store');
});

Route::middleware('auth')->group(function () {

    Route::get('/barangKeluar', [produkKeluarController::class, 'index'])->name('barangKeluar');
    Route::get('/barangKeluar/create', [produkKeluarController::class, 'create'])->name('barangKeluar.create');
    Route::post('/barangKeluar', [produkKeluarController::class, 'store'])->name('barangKeluar.store');
});

// Route::get('/barangKeluar', function () {
//     return view('barangKeluar');
// })->middleware(['auth', 'verified'])->name('barangKeluar');

Route::middleware('auth')->group(function () {
    Route::get('/cetakTransaksi', [TransaksiController::class, 'index'])->name('cetakTransaksi');
});

// Route::get('/cetakTransaksi', function () {
//     return view('cetakTransaksi');
// })->middleware(['auth', 'verified'])->name('cetakTransaksi');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
