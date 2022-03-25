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
            'product_name' => 'Reynolds',
            'provider_name' => 'Reynolds industries',
            'product_desc' => 'Bic blue pen',
            'product_qty' => 100,
        ]);
        Stock::create([
            'product_name' => 'Notebok',
            'provider_name' => 'Selecta',
            'product_desc' => 'colorful notebok',
            'product_qty' => 100,
        ]);
        Stock::create([
            'product_name' => 'Notebook',
            'provider_name' => 'Yamema',
            'product_desc' => 'Sketch Notebook',
            'product_qty' => 100,
        ]);
    }
}
