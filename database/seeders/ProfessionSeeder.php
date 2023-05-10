<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    public function run()
    {
        $conteudo = file_get_contents('database/seeders/files/mte/occupations.json');
        $datas = json_decode($conteudo, true);

        foreach ($datas as $data) {
            DB::table('professions')->insert([
                'code' => $data['code'],
                'name' => $data['name'],
                'is_custom' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
