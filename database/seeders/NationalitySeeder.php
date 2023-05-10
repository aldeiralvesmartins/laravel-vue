<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitySeeder extends Seeder
{
        public static $nationalities = [
            ['code' => '0', 'name' => 'Brasileiro (a)'],
            ['code' => '1', 'name' => 'Brasileiro (a) Naturalizado (a)'],
            ['code' => '2', 'name' => 'Estrangeiro (a)'],
        ];


    public function run()
    {
        foreach (self::$nationalities as $nationality) {
            DB::table('nationalities')->insert([
                'code' => $nationality['code'],
                'name' => $nationality['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
