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
