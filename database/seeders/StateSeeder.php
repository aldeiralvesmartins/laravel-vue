<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    public static $states = [
        ['acronyms' => 'AC', 'name' => 'Acre', 'country_id' => 1],
        ['acronyms' => 'AL', 'name' => 'Alagoas', 'country_id' => 1],
        ['acronyms' => 'AP', 'name' => 'Amapá', 'country_id' => 1],
        ['acronyms' => 'AM', 'name' => 'Amazonas', 'country_id' => 1],
        ['acronyms' => 'BA', 'name' => 'Bahia', 'country_id' => 1],
        ['acronyms' => 'CE', 'name' => 'Ceará', 'country_id' => 1],
        ['acronyms' => 'DF', 'name' => 'Distrito Federal', 'country_id' => 1],
        ['acronyms' => 'ES', 'name' => 'Espírito Santo', 'country_id' => 1],
        ['acronyms' => 'GO', 'name' => 'Goiás', 'country_id' => 1],
        ['acronyms' => 'MA', 'name' => 'Maranhão', 'country_id' => 1],
        ['acronyms' => 'MT', 'name' => 'Mato Grosso', 'country_id' => 1],
        ['acronyms' => 'MS', 'name' => 'Mato Grosso do Sul', 'country_id' => 1],
        ['acronyms' => 'MG', 'name' => 'Minas Gerais', 'country_id' => 1],
        ['acronyms' => 'PA', 'name' => 'Pará', 'country_id' => 1],
        ['acronyms' => 'PB', 'name' => 'Paraíba', 'country_id' => 1],
        ['acronyms' => 'PR', 'name' => 'Paraná', 'country_id' => 1],
        ['acronyms' => 'PE', 'name' => 'Pernambuco', 'country_id' => 1],
        ['acronyms' => 'PI', 'name' => 'Piauí', 'country_id' => 1],
        ['acronyms' => 'RJ', 'name' => 'Rio de Janeiro', 'country_id' => 1],
        ['acronyms' => 'RN', 'name' => 'Rio Grande do Norte', 'country_id' => 1],
        ['acronyms' => 'RS', 'name' => 'Rio Grande do Sul', 'country_id' => 1],
        ['acronyms' => 'RO', 'name' => 'Rondônia', 'country_id' => 1],
        ['acronyms' => 'RR', 'name' => 'Roraima', 'country_id' => 1],
        ['acronyms' => 'SC', 'name' => 'Santa Catarina', 'country_id' => 1],
        ['acronyms' => 'SP', 'name' => 'São Paulo', 'country_id' => 1],
        ['acronyms' => 'SE', 'name' => 'Sergipe', 'country_id' => 1],
        ['acronyms' => 'TO', 'name' => 'Tocantins', 'country_id' => 1],
    ];

    public function run()
    {
        foreach (self::$states as $state) {
            DB::table('states')->insert([
                'acronyms' => $state['acronyms'],
                'name' => $state['name'],
                'country_id' => $state['country_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
