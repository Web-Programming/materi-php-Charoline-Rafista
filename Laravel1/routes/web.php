<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Halo, nama saya Charoline";
    // return view('welcome');
});

//route ke halaman alamat 
Route::get('/alamat', function(){
    echo "Jalan Kebun Bunga, Palembang";
});

//route ke halaman path1/path2/detail 
Route::get('/path1/path2/detail ', function(){
    echo "Jalan Kebun Bunga, Palembang";
});

//dr line 50
//Router dengan metode POST
Route::post('/simpan', function(){
    echo "Data berhasil disimpan";
});

//Router dengan metode PUT
Route::put('/update/{id}', function($id){
    echo "Data berhasil diperbarui dengan ID: " . $id;
});

//Router dengan method PATCH
Route::patch('/update2/{id}', function($id){
    echo "Data berhasil dihapus dengan ID: " . $id;
});

// Router dengan method DELETE 
Route::delete('/hapus/{id}', function($id){
    echo "Data berhasil dihapus dengan ID: " . $id;
});

//Route untuk menampilkan halaman test_method
Route::get('/test-method', function(){
    return view('test_method');
});

//menampilkan halaman profile
Route::get('/Profile', function(){
    return view('Profile');
});

// mengirim data ke view
Route::get('/detailproduk/(name)', function($name){
    return view('product.detail',
        ['product_name' => $name,
        'id' => 101,
        'color' => 'Silver',
        'stock' => 12
        ]
    );
});

Route::get('/produk/', function(){
    return view(produk.index);
});

Route::get('/produk/create', function(){
    return view('produk.create');
});

Route::get('/produk/search', function(){
    return view('produk.search');
});

Route::get('/produk/detail', function(){
    return view(produk.detail);
});

Route::get('/supplier/', function(){
    return view(supplier.index);
});

Route::get('/supplier/create', function(){
    return view('supplier.create');
});

Route::get('/supplier/search', function(){
    return view('supplier.search');
});

Route::get('/supplier/detail', function(){
    return view(supplier.detail);
});

use App\Http\Controllers\ProductController;
//php artisan make:controller ProductController --resource
Route::resource('/produk', ProductController::class);
Route::get('/produk/search', ProductController::class . '@search');

//php artisan make:controller ProductController --resource
Route::resource('/supplier', ProductController::class);