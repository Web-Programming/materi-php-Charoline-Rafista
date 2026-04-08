<?php
namespace App\Services;
class Item{
    public $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }
    public function info(){
        return "Services: " . $this->nama;
    }
}
?>