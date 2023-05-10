<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class WorkStatySeeder extends Seeder
{
    public static $workStatus = [
        ['name' => 'Assalariado'],
        ['name' => 'Autônomo'],
        ['name' => 'Trabalhador Rural'],
        ['name' => 'Aposentado/Pensionista'],
        ['name' => 'Funcionário Público'],
        ['name' => 'Não Trabalha'],
        ['name' => 'Outro'],
    ];

    public function run()
    {
        foreach (self::$workStatus as $workStaty) {
            DB::table('work_status')->insert([
                'name' => $workStaty['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
