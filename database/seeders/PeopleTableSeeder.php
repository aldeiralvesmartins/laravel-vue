<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    public static $people = [
        [
            'name' => 'João Silva',
            'taxpayer' => '12345678901',
            'birthdate' => '1980-01-01',
            'rg_number' => '1234567',
            'dispatcher_agency_id' => 1,
            'observation' => 'Observação 1',
            'name_mother' => 'Maria Silva',
            'name_father' => 'José Silva',
            'naturalness' => 'São Paulo',
            'nationality_id' => 1,
            'expedition_date_rg' => '2000-01-01',
            'gender' => 'Masculino',
            'nationalities' => 1,
            'schooling_id' => 1,
            'marital_status_id' => 1,
            'address_id' => 1,
            'married_date' => null,
            'profession_id' => 1,
            'work_status_id' => 1,
            'has_social_benefits' => true,
            'has_deficiencies' => false,
            'has_chronic_diseases' => false,
            'has_absent_parner' => false,
        ],
        [
            'name' => 'Maria Souza',
            'taxpayer' => '23456789012',
            'birthdate' => '1990-01-01',
            'rg_number' => '2345678',
            'dispatcher_agency_id' => 2,
            'observation' => 'Observação 2',
            'name_mother' => 'Ana Souza',
            'name_father' => 'José Souza',
            'naturalness' => 'Rio de Janeiro',
            'nationality_id' => 2,
            'expedition_date_rg' => '2010-01-01',
            'gender' => 'Feminino',
            'nationalities' => 2,
            'schooling_id' => 2,
            'marital_status_id' => 2,
            'address_id' => 2,
            'married_date' => null,
            'profession_id' => 2,
            'work_status_id' => 2,
            'has_social_benefits' => true,
            'has_deficiencies' => false,
            'has_chronic_diseases' => false,
            'has_absent_parner' => false,
        ],
        [
            'name' => 'José Santos',
            'taxpayer' => '34567890123',
            'birthdate' => '2000-01-01',
            'rg_number' => '3456789',
            'dispatcher_agency_id' => 3,
            'observation' => 'Observação 3',
            'name_mother' => 'Ana Santos',
            'name_father' => 'João Santos',
            'naturalness' => 'Minas Gerais',
            'nationality_id' => 1,
            'expedition_date_rg' => '2020-01-01',
            'gender' => 'Masculino',
            'nationalities' => 1,
            'schooling_id' => 3,
            'marital_status_id' => 3,
            'address_id' => 3,
            'married_date' => null,
            'profession_id' => 2,
            'work_status_id' => 2,
            'has_social_benefits' => true,
            'has_deficiencies' => false,
            'has_chronic_diseases' => false,
            'has_absent_parner' => false,
        ]
];


    public function run()
    {

        foreach (self::$people as $person) {
            DB::table('people')->insert([
                'name' => $person['name'],
                'taxpayer' => $person['taxpayer'],
                'birthdate' => $person['birthdate'],
                'rg_number' => $person['rg_number'],
                'dispatcher_agency_id' => $person['dispatcher_agency_id'],
                'observation' => $person['observation'],
                'name_mother' => $person['name_mother'],
                'name_father' => $person['name_father'],
                'naturalness' => $person['naturalness'],
                'nationality_id' => $person['nationality_id'],
                'expedition_date_rg' => $person['expedition_date_rg'],
                'gender' => $person['gender'],
                'nationalities' => $person['nationalities'],
                'schooling_id' => $person['schooling_id'],
                'marital_status_id' => $person['marital_status_id'],
                'address_id' => $person['address_id'],
                'married_date' => $person['married_date'],
                'profession_id' => $person['profession_id'],
                'work_status_id' => $person['work_status_id'],
                'has_social_benefits' => $person['has_social_benefits'],
                'has_deficiencies' => $person['has_deficiencies'],
                'has_chronic_diseases' => $person['has_chronic_diseases'],
                'has_absent_parner' => $person['has_absent_parner'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
