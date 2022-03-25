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
            'provier_name' => 'Maped',
            'provider_country' => 'Italie',

        ]);
        Provider::create([
            'provier_name' => 'Reynolds',
            'provider_country' => 'France',

        ]);
        Provider::create([
            'provier_name' => 'Bic',
            'provider_country' => 'Tunisia',

        ]);
    }
}
