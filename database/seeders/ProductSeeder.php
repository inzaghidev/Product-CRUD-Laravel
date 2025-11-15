<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['name' => 'Kopi Hitam', 'description' => 'Kopi robusta', 'price' => 15000, 'stock' => 50],
            ['name' => 'Teh Botol', 'description' => 'Minuman teh manis', 'price' => 7000, 'stock' => 100],
            ['name' => 'Gula Pasir', 'description' => '1 kg', 'price' => 13000, 'stock' => 40],
            ['name' => 'Beras Premium', 'description' => '5 kg', 'price' => 65000, 'stock' => 20],
            ['name' => 'Minyak Goreng', 'description' => '1 liter', 'price' => 14000, 'stock' => 60],
            ['name' => 'Susu UHT', 'description' => '250 ml', 'price' => 6000, 'stock' => 80],
            ['name' => 'Roti Tawar', 'description' => '500 gram', 'price' => 12000, 'stock' => 70],
            ['name' => 'Telur Ayam', 'description' => '1 lusin', 'price' => 24000, 'stock' => 90],
            ['name' => 'Daging Ayam', 'description' => '1 kg', 'price' => 40000, 'stock' => 30],
            ['name' => 'Sayur Bayam', 'description' => '250 gram', 'price' => 5000, 'stock' => 110],
        ]);
    }
}
