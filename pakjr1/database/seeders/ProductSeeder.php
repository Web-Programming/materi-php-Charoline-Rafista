<?php
use illuminate\Database\Console\Seeds\WithoutModelEvents;
use illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder{
    //Run the database seeds 
public function run(): void{
    DB::table('products')-> insert([
    'name'=> fake() -> name(), //str::random(10)
    'price'=> rand(1000,10000),
    'description'=> fake() -> text(100), //str::random(20)
    'status'=> ['new', 'used'] [rand(0,1)], 
    'is active' => true,
    'release_date' => now()->subDays(rand(1,365)), 
    ]);
    }
}
