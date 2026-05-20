<?php
use illuminate\Support\Facades\Gate;
public function create()
{
    //cek autorization menggunakan Gate
    Gate::authorize('create-products');

    $title = 'Tambah Produk';
    return view('produk.create', compact('title'));
}

public function update($id)
{
    //cek autorization menggunakan Gate
    Gate::authorize('update-products');

    $produk = Produk::findOrFail($id);
    $title = 'Edit Produk';
    return view('produk.edit', compact('produk', 'title'));
}