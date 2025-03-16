<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Iphone',
                'description' => 'Iphone',
                'price' => 1000000,
                'stock' => 10,
                'image' => 'https://placehold.co/400x600',
                'product_category_id' => 1,
            ],
              [
                'name' => 'Buku Tulis Sidu',
                'description' => 'Buku Tulis Sidu Ukuran A4',
                'price' => 5000,
                'stock' => 10,
                'image' => 'https://placehold.co/400x600',
                'product_category_id' => 2,
            ],
              [
                'name' => 'Roma Sari Gandum',
                'description' => 'Biskuit Roma gandum',
                'price' => 5000,
                'stock' => 10,
                'image' => 'https://placehold.co/400x600',
                'product_category_id' => 3,
            ],
        ]);
    }
}
