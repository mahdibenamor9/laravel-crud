<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => 'Pen',
            'product_desc' => 'Blue PEN',
            'registration_number' => '784',
        ]);
        Product::create([
            'product_name' => 'Stylo',
            'product_desc' => 'Red Pen',
            'registration_number' => '7004',
        ]);
        Product::create([
            'product_name' => 'Paper',
            'product_desc' => 'White Paper',
            'registration_number' => '4100',
        ]);
    }
}
