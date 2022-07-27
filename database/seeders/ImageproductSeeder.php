<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ImageproductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            ['image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60', 'title' => "img1", 'alt' => "img1"],
            ['image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60', 'title' => "img2", 'alt' => "img2"],
            ['image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60', 'title' => "img3", 'alt' => "img3"],
        ];

        foreach ($images as $image) {
            DB::table('imageproduct_tables')->insert([
                'title' => $image['title'],
                'image' => $image['image'],
                'alt' => $image['alt'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}