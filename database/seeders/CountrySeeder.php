<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CountrySeeder extends Seeder
{
    public static $countries = [
        ['acronyms' => 'BRA', 'name' => 'Brasil'],
        ['acronyms' => 'AFG', 'name' => 'Afeganistão'],
        ['acronyms' => 'ALB', 'name' => 'Albânia'],
        ['acronyms' => 'ALG', 'name' => 'Argélia'],
        ['acronyms' => 'AND', 'name' => 'Andorra'],
        ['acronyms' => 'ANG', 'name' => 'Angola'],
        ['acronyms' => 'ARG', 'name' => 'Argentina'],
        ['acronyms' => 'AUS', 'name' => 'Austrália'],
        ['acronyms' => 'AUT', 'name' => 'Áustria'],
        ['acronyms' => 'BAH', 'name' => 'Bahamas'],
        ['acronyms' => 'BAN', 'name' => 'Bangladesh'],
        ['acronyms' => 'BEL', 'name' => 'Bélgica'],
        ['acronyms' => 'BOL', 'name' => 'Bolívia'],
        ['acronyms' => 'BUL', 'name' => 'Bulgária'],
        ['acronyms' => 'CAM', 'name' => 'Camboja'],
        ['acronyms' => 'CAN', 'name' => 'Canadá'],
        ['acronyms' => 'CAY', 'name' => 'Ilhas Cayman'],
        ['acronyms' => 'CHI', 'name' => 'Chile'],
        ['acronyms' => 'CHN', 'name' => 'China'],
        ['acronyms' => 'CIV', 'name' => 'Costa do Marfim'],
        ['acronyms' => 'CMR', 'name' => 'Camarões'],
        ['acronyms' => 'COL', 'name' => 'Colômbia'],
        ['acronyms' => 'CPV', 'name' => 'Cabo Verde'],
        ['acronyms' => 'CRC', 'name' => 'Costa Rica'],
        ['acronyms' => 'CRO', 'name' => 'Croácia'],
        ['acronyms' => 'CUB', 'name' => 'Cuba'],
        ['acronyms' => 'DEN', 'name' => 'Dinamarca'],
        ['acronyms' => 'DOM', 'name' => 'República Dominicana'],
        ['acronyms' => 'ECU', 'name' => 'Equador'],
        ['acronyms' => 'EGY', 'name' => 'Egito'],
        ['acronyms' => 'ESP', 'name' => 'Espanha'],
        ['acronyms' => 'ENG', 'name' => 'Inglaterra'],
        ['acronyms' => 'FIN', 'name' => 'Finlândia'],
        ['acronyms' => 'FRA', 'name' => 'França'],
        ['acronyms' => 'GER', 'name' => 'Alemanha'],
        ['acronyms' => 'HON', 'name' => 'Honduras'],
        ['acronyms' => 'HUN', 'name' => 'Hungria'],
        ['acronyms' => 'INA', 'name' => 'Indonésia'],
        ['acronyms' => 'IND', 'name' => 'Índia'],
        ['acronyms' => 'IRL', 'name' => 'Irlanda'],
        ['acronyms' => 'IRQ', 'name' => 'Iraque'],
        ['acronyms' => 'ISL', 'name' => 'Islândia'],
        ['acronyms' => 'ISR', 'name' => 'Israel'],
        ['acronyms' => 'ITA', 'name' => 'Itália'],
        ['acronyms' => 'JAM', 'name' => 'Jamaica'],
        ['acronyms' => 'JPN', 'name' => 'Japão'],
        ['acronyms' => 'KEN', 'name' => 'Quênia'],
        ['acronyms' => 'KOR', 'name' => 'Coreia do Sul'],
        ['acronyms' => 'KSA', 'name' => 'Arábia Saudita'],
        ['acronyms' => 'KUW', 'name' => 'Kuwait'],
        ['acronyms' => 'LBA', 'name' => 'Líbia'],
        ['acronyms' => 'LBN', 'name' => 'Líbano'],
        ['acronyms' => 'MAR', 'name' => 'Marrocos'],
        ['acronyms' => 'MAS', 'name' => 'Malásia'],
        ['acronyms' => 'MDV', 'name' => 'Maldivas'],
        ['acronyms' => 'MEX', 'name' => 'México'],
        ['acronyms' => 'MGL', 'name' => 'Mongólia'],
        ['acronyms' => 'MOZ', 'name' => 'Moçambique'],
        ['acronyms' => 'NCA', 'name' => 'Nicarágua'],
        ['acronyms' => 'NGR', 'name' => 'Nigéria'],
        ['acronyms' => 'NOR', 'name' => 'Noruega'],
        ['acronyms' => 'NZL', 'name' => 'Nova Zelândia'],
        ['acronyms' => 'PAK', 'name' => 'Paquistão'],
        ['acronyms' => 'PAN', 'name' => 'Panamá'],
        ['acronyms' => 'PAR', 'name' => 'Paraguai'],
        ['acronyms' => 'PER', 'name' => 'Peru'],
        ['acronyms' => 'PHI', 'name' => 'Filipinas'],
        ['acronyms' => 'POL', 'name' => 'Polônia'],
        ['acronyms' => 'POR', 'name' => 'Portugal'],
        ['acronyms' => 'PRK', 'name' => 'Coreia do Norte'],
        ['acronyms' => 'PUR', 'name' => 'Porto Rico'],
        ['acronyms' => 'QAT', 'name' => 'Catar'],
        ['acronyms' => 'RSA', 'name' => 'África do Sul'],
        ['acronyms' => 'RUS', 'name' => 'Rússia'],
        ['acronyms' => 'SEN', 'name' => 'Senegal'],
        ['acronyms' => 'SGP', 'name' => 'Singapura'],
        ['acronyms' => 'SLO', 'name' => 'Eslovênia'],
        ['acronyms' => 'SOM', 'name' => 'Somália'],
        ['acronyms' => 'SRB', 'name' => 'Sérvia'],
        ['acronyms' => 'SUI', 'name' => 'Suíça'],
        ['acronyms' => 'SVK', 'name' => 'Eslováquia'],
        ['acronyms' => 'SWE', 'name' => 'Suécia'],
        ['acronyms' => 'SYR', 'name' => 'Síria'],
        ['acronyms' => 'THA', 'name' => 'Tailândia'],
        ['acronyms' => 'TTO', 'name' => 'Trinidad e Tobago'],
        ['acronyms' => 'TUN', 'name' => 'Tunísia'],
        ['acronyms' => 'TUR', 'name' => 'Turquia'],
        ['acronyms' => 'UAE', 'name' => 'Emirados Árabes Unidos'],
        ['acronyms' => 'UKR', 'name' => 'Ucrânia'],
        ['acronyms' => 'URU', 'name' => 'Uruguai'],
        ['acronyms' => 'USA', 'name' => 'Estados Unidos'],
        ['acronyms' => 'VEN', 'name' => 'Venezuela'],
        ['acronyms' => 'VIE', 'name' => 'Vietnã'],
        ['acronyms' => 'YEM', 'name' => 'Iêmen'],
    ];

    public function run()
    {
        foreach (self::$countries as $country) {
            DB::table('countries')->insert([
                'acronyms' => $country['acronyms'],
                'name' => $country['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
