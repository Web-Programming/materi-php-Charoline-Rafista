<?php
require_once "app/produk/Item.php";
require_once "app/services/Item.php";

//menggunakan alias untuk menghindari konflik nama
use App\Produk\Item as ProdukItem;
use App\Services\Item as ServicesItem;

//membuat instance
$produk = new ProdukItem("Laptop");
$services = new ServicesItem("Perbaikan Laptop");

//menampilkan hasil
echo $produk->info() . "\n";
echo $services->info();

?>
