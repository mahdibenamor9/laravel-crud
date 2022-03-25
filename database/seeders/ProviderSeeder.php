<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create([
            'provider_name' => 'Mapped',
            'provider_country' => 'Germany',

        ]);
        Provider::create([
            'provider_name' => 'Reynolds',
            'provider_country' => 'Italie',

        ]);
        Provider::create([
            'provider_name' => 'Bic',
            'provider_country' => 'Maroc',

        ]);
    }
}
