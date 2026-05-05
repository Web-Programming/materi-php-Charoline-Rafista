<?php
namespace App\Models;
use illuminate\Database\Eloquent\Model;
class Product extends Model {
    //jika nama tabel tidak sesuai dengan konvensi
    //maka kita bisa mendefinisikan namespace
    protected $stable = 'products';
}

