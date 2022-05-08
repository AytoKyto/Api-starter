<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collections = [
            'Classique Collection',
            'Off-White X AKURA',
        ];

        foreach ($collections as $collection) {
            DB::table('collections_tables')->insert([
                'name' => $collection,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}