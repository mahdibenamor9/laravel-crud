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
<<<<<<< HEAD
            'provider_name' => 'Maped',
            'provider_country' => 'tunisia',
=======
            'provider_name' => 'Mapped',
            'provider_country' => 'Germany',
>>>>>>> develop

        ]);
        Provider::create([
            'provider_name' => 'Reynolds',
            'provider_country' => 'Italie',

        ]);
        Provider::create([
            'provider_name' => 'Bic',
<<<<<<< HEAD
            'provider_country' => 'libya',
=======
            'provider_country' => 'Maroc',
>>>>>>> develop

        ]);
    }
}
