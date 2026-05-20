<?php

use Illuminate\Support\Facades\Route;

// ==================== IMPORT CONTROLLER ====================
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;



// ==================== HOME ====================
Route::get('/', function () {
    return view('home');
})->name('home');


// ==================== ROUTE LATIHAN ====================

// Halaman alamat
Route::get('/alamat', function () {
    echo "Jalan Rajawali 14. Palembang";
});

// Halaman detail alamat
Route::get('/path1/path2/detail', function () {
    echo "Jalan Rajawali 14. Palembang";
    echo "<br>";
    echo "Rt. 01 Rw. 02";
    echo "<br>";
    echo "Kecamatan Alang-Alang Lebar";
    echo "<br>";
    echo "Kota Palembang";
    echo "<br>";
    echo "Provinsi Sumatera Selatan";
});

// Route dinamis
Route::get('/user/{id}', function ($id) {
    echo "User ID: " . $id;
});

Route::get('/user2/{name}', function ($name) {
    echo "User Name: " . $name;
});

Route::get('/user3/{name?}', function ($name = 'Tamu') {
    echo "User Name: " . $name;
});

Route::get('/user4/{id}/{name}', function ($id, $name) {
    echo "User ID: " . $id;
    echo "<br>";
    echo "User Name: " . $name;
});


// ==================== TEST METHOD ====================

// GET
Route::get('/simpan', function () {
    echo "Data berhasil disimpan";
});

// PUT
Route::put('/update/{id}', function ($id) {
    echo "Data berhasil diperbarui dengan ID: " . $id;
});

// PATCH
Route::patch('/update2/{id}', function ($id) {
    echo "Data berhasil diperbarui dengan ID: " . $id;
});

// DELETE
Route::delete('/hapus/{id}', function ($id) {
    echo "Data berhasil dihapus dengan ID: " . $id;
});


// ==================== VIEW ====================

Route::get('/test-method', function () {
    return view('test_method');
});

Route::get('/profil', function () {
    return view('profile');
});

Route::get('/detailproduk', function () {
    return view('produk.detail');
});


// ==================== ROUTE AUTHENTIKASI ====================

// Form register
Route::get('/register', [AuthController::class, 'registerForm'])
    ->name('register')
    ->middleware('guest');

// Proses register
Route::post('/register', [AuthController::class, 'register'])
    ->middleware('guest');

// Form login
Route::get('/login', [AuthController::class, 'loginForm'])
    ->name('login')
    ->middleware('guest');

// Proses login
Route::post('/login', [AuthController::class, 'login'])
    ->middleware('guest');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');


// ==================== ROUTE YANG DILINDUNGI ====================

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Barang
    Route::resource('/barang', ProductController::class);

    // Produk
    Route::resource('/produk', ProductController::class);

    Route::get('/produk/search', [ProductController::class, 'search']);
    Route::get('/produk/detail', [ProductController::class, 'detail']);

    // Supplier
    Route::resource('/supplier', SupplierController::class);

    Route::get('/supplier/search', [SupplierController::class, 'search']);
    Route::get('/supplier/detail', [SupplierController::class, 'detail']);
});