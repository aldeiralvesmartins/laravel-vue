<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MatrialStatusSeeder extends Seeder
{
    public static $countries = [
        ['name' => 'Casado (a) com comunhão parcial de bens'],
        ['name' => 'Casado (a) com comunhão total de bens'],
        ['name' => 'Casado (a) em regime de separação de bens'],
        ['name' => 'Divorciado (a)'],
        ['name' => 'Separado (a)'],
        ['name' => 'Solteiro (a)'],
        ['name' => 'União estável/outros'],
        ['name' => 'Viúvo (a)'],
    ];

    public function run()
    {
        foreach (self::$countries as $country) {
            DB::table('marital_statuses')->insert([
                'name' => $country['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
