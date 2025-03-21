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
           ['name' => 'Laptop', 'description' => 'Laptop gaming terbaru', 'price' => 15000000, 'stock' => 5, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 1],
            ['name' => 'Smartphone', 'description' => 'Smartphone dengan kamera terbaik', 'price' => 8000000, 'stock' => 10, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 1],
            ['name' => 'TV LED', 'description' => 'TV LED 50 inci dengan resolusi 4K', 'price' => 7000000, 'stock' => 3, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 1],
            ['name' => 'Buku Pemrograman', 'description' => 'Buku untuk belajar pemrograman', 'price' => 150000, 'stock' => 20, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 2],
            ['name' => 'Novel Fiksi', 'description' => 'Novel fiksi terbaru yang menarik', 'price' => 100000, 'stock' => 15, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 2],
            ['name' => 'Ensiklopedia', 'description' => 'Ensiklopedia dengan informasi lengkap', 'price' => 300000, 'stock' => 7, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 2],
            ['name' => 'Cokelat', 'description' => 'Cokelat premium dengan rasa lezat', 'price' => 50000, 'stock' => 50, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 3],
            ['name' => 'Kopi', 'description' => 'Kopi arabika berkualitas tinggi', 'price' => 75000, 'stock' => 30, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 3],
            ['name' => 'Mie Instan', 'description' => 'Mie instan rasa ayam spesial', 'price' => 15000, 'stock' => 100, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 3],
            ['name' => 'Biskuit', 'description' => 'Biskuit dengan rasa cokelat', 'price' => 20000, 'stock' => 40, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 3],
            ['name' => 'Tablet', 'description' => 'Tablet untuk bekerja dan hiburan', 'price' => 5000000, 'stock' => 8, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 1],
            ['name' => 'Headphone', 'description' => 'Headphone noise-canceling berkualitas tinggi', 'price' => 1200000, 'stock' => 12, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 1],
            ['name' => 'Mouse Gaming', 'description' => 'Mouse gaming dengan sensor presisi tinggi', 'price' => 600000, 'stock' => 25, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 1],
            ['name' => 'Komik Manga', 'description' => 'Komik manga dengan cerita menarik', 'price' => 80000, 'stock' => 18, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 2],
            ['name' => 'Kamus Inggris', 'description' => 'Kamus lengkap bahasa Inggris-Indonesia', 'price' => 130000, 'stock' => 10, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 2],
            ['name' => 'Teh Hijau', 'description' => 'Teh hijau organik yang menyegarkan', 'price' => 55000, 'stock' => 40, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 3],
            ['name' => 'Roti Gandum', 'description' => 'Roti gandum sehat dengan serat tinggi', 'price' => 30000, 'stock' => 35, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 3],
            ['name' => 'Susu Almond', 'description' => 'Susu almond bebas laktosa', 'price' => 75000, 'stock' => 20, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 3],
            ['name' => 'Madu Murni', 'description' => 'Madu alami dari lebah hutan', 'price' => 100000, 'stock' => 15, 'image' => 'https://placehold.co/400x600', 'product_category_id' => 3],
        ]);
    }
}
