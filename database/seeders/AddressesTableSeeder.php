<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pt_BR');

        // Populating the table with 10 addresses
        for ($i = 0; $i < 10; $i++) {
            DB::table('addresses')->insert([
                'cep' => $faker->numerify('#####-###'),
                'street' => $faker->streetName,
                'number' => $faker->numberBetween(1, 1000),
                'neighborhood' => $faker->word,
                'complement' => $faker->sentence(3),
                'observation' => $faker->sentence(5),
                'city_id' => $faker->uuid
            ]);
        }
    }
}
