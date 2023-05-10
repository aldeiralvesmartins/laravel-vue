<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class schoolingSeeder extends Seeder
{
    public static $countries = [
        ['code' => '0', 'name' => 'Departamento de Polícia Federal'],
        ['code' => '1', 'name' => 'DEPARTAMENTO ESTADUAL DE TRÂNSITO'],
        ['code' => '2', 'name' => 'Departamento Regional do Trabalho'],
        ['code' => '3', 'name' => 'DIRETORIA GERAL DA POLÍCIA CIVIL'],
        ['code' => '4', 'name' => 'INSTITUTO FÉLIX PACHECO'],
        ['code' => '5', 'name' => 'Ministério do Trabalho e Emprego'],
        ['code' => '6', 'name' => 'Não Preencheu'],
        ['code' => '7', 'name' => 'POLÍCIA CIVIL'],
        ['code' => '8', 'name' => 'Polícia Militar'],
        ['code' => '9', 'name' => 'SECRETARIA DE ESTADO DE JUSTIÇA E SEGURANÇA PÚBLICA'],
        ['code' => '10', 'name' => 'SECRETARIA DE JUSTIÇA'],
        ['code' => '11', 'name' => 'SECRETARIA DE JUSTIÇA E SEGURANÇA PÚBLICA'],
        ['code' => '12', 'name' => 'SECRETARIA DE POLÍCIA TÉCNICO CIENTÍFICA'],
        ['code' => '13', 'name' => 'SECRETARIA DE SEGURANÇA PÚBLICA'],
        ['code' => '14', 'name' => 'SECRETARIA ESTADUAL DE SEGURANÇA PÚBLICA'],
    ];

    public function run()
    {
        foreach (self::$countries as $country) {
            DB::table('schooling')->insert([
                'code' => $country['code'],
                'name' => $country['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
