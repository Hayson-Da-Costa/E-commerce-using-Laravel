<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'name'        => 'Headphones',
                'description' => 'One for the Gamers',
                'price'       => '799',
                'image_path'  => 'Empty',
            ],
        ];
    }
}
