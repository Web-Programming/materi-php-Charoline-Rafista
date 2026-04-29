<?php

public function index()
{
    // Mengambil semua data dari tabel suppliers
    $suppliers = \App\Models\Supplier::all(); 

    // Mengirim data ke view
    return view('supplier.index', compact('suppliers'));
} 