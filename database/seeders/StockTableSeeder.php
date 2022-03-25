<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::create([
            'product_id' => 1,
            'provider_id' => 1,
            'product_desc' => 'Bic blue pen',
            'product_qty' => 100,
        ]);
        Stock::create([
            'product_id' => 2,
            'provider_id' => 2,
            'product_desc' => 'colorful notebok',
            'product_qty' => 100,
        ]);
        Stock::create([
            'product_id' => 3,
            'provider_id' => 3,
            'product_desc' => 'Sketch Notebook',
            'product_qty' => 100,

        ]);
    }
}
