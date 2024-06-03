<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'LG Refrigerator',
                'price' => '50000',
                'description' => 'A Refrigerator with more features',
                'category' => 'refrigerator',
                'gallery' => json_encode(['assets/images/ref1.png']),
            ],
            [
                'name' => 'Iphone 12',
                'price' => '120000',
                'description' => 'A smartphone with 6 gb ram and 256 gb rom with more features',
                'category' => 'mobile',
                'gallery' => json_encode(['assets/images/i.jpeg']),
            ],
            [
                'name' => 'Samsung Refrigerator',
                'price' => '100000',
                'description' => 'A Refrigerator with more features',
                'category' => 'refrigerator',
                'gallery' => json_encode(['assets/images/ref2.png']),
            ],
            [
                'name' => 'CG Refrigerator',
                'price' => '75000',
                'description' => 'A Refrigerator with more features',
                'category' => 'refrigerator',
                'gallery' => json_encode(['assets/images/ref3.png']),
            ],
            [
                'name' => 'Oppo F12',
                'price' => '100000',
                'description' => 'A smartphone with 6 gb ram and 256 gb rom with more features',
                'category' => 'mobile',
                'gallery' => json_encode(['assets/images/R.png']),
            ],
            [
                'name' => 'Samsung Television ',
                'price' => '150000',
                'description' => 'A smartphone with 6 gb ram and 256 gb rom with more features',
                'category' => 'LED TV',
                'gallery' => json_encode(['assets/images/tv.jpeg']),
            ],
        ];

        foreach ($products as $product) {
            DB::table('product')->updateOrInsert(
                ['name' => $product['name']], // Condition to check for duplicates
                $product
            );
        }
    }
}
