<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['title' => 'Hoodie', 'body' => 'Hoodie', 'price' => '100', 'category_id' => 1, 'collection_id' => 1, 'imageproduct_id'=> 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'T-Shirt', 'body' => 'T-Shirt', 'price' => '100', 'category_id' => 2, 'collection_id' => 1, 'imageproduct_id'=> 2, 'created_at' => now(), 'updated_at' => now()],
        ];

        foreach ($products as $product) {
            DB::table('product_tables')->insert([
                'title' => $product['title'],
                'body' => $product['body'],
                'price' => $product['price'],
                'category_id' => $product['category_id'],
                'collection_id' => $product['collection_id'],
                'imageproduct_id' => $product['imageproduct_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}