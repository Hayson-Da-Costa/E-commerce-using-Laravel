<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::insert([
            'name'        => 'Headphones',
            'description' => 'One for the Gamers',
            'price'       => '799',
            'image_path'  => 'empty',
        ]);
    }
}
