<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DispatchingAgencySeeder extends Seeder
{
    public function run()
    {
        $conteudo = file_get_contents('database/seeders/files/mte/dispatching-agencies.json');
        $dispatching = json_decode($conteudo, true);
        foreach ($dispatching as $country) {
            DB::table('dispatching_agencies')->insert([
                'id' => $country['id'],
                'code' => $country['code'],
                'name' => $country['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
