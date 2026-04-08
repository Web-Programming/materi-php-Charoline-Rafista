<?php
namespace App;

class Item{
    //cara penulisan property
    public $nama;

    //cara penulisan method
    function info(){
        // isi method info()
        return "Item: " . $this->nama;
    }
}

use App\Item; // untuk memanggil class Item yang berada di namespace App
use App\Item as Produk; 
use App\Item as Services;

// inisialisasi objek dari namespace alias
$nama_produk = new Produk();
$nama_services = new Services();

// set property
$nama_produk->nama = "Laptop";
$nama_services->nama = "Jasa Instalasi";


// memanggil method info()
echo $nama_produk->info();
echo "<br>";
echo $nama_services->info();

?>