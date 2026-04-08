<?php
namespace Kendaraan; // untuk membedakan class berdasarkan kelompok atau kategori, sehingga tidak terjadi bentrok nama class dengan class lain yang memiliki nama yang sama
// cara penulisan class Mobil
class Mobil{
    //cara penulisan property
    public $warna;
    public $merk;

    //cara penulisan method
    function maju(){
        // isi method maju()
        return "Mobil maju";
    }

    function berhenti(){
        // isi method berhenti()
        return "Mobil berhenti";
    }
}


use Kendaraan\Mobil; // untuk memanggil class Mobil yang berada di namespace Kendaraan
// Membuat inisial namespace 
use Kendaraan\Mobil as KMobil; // untuk memanggil class Mobil dengan nama alias KMobil

//instansiasi object dari namespace alias
$mobil_ahmad = new KMobil(); 

//instansiasi object 
// $mobil_ahmad = new Mobil();
$mobil_anton = new KMobil();

// set property
$mobil_ahmad->warna = "Hitam";
$mobil_ahmad->merk = "Toyota";

// tampilkan property 
echo "Mobil Ahmad";
echo "<br> warna : " . $mobil_ahmad->warna;
echo "<br> merk : " . $mobil_ahmad->merk;
echo "<br> Merk :". $mobil_anton->merk; // belum di set, maka akan bernilai null

//tampilkan method
echo "<br>" . $mobil_ahmad->maju();
echo "<br>";
echo "<br>" . $mobil_ahmad->berhenti();
?>