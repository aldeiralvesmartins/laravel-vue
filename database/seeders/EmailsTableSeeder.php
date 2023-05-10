<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Email;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EmailsTableSeeder extends Seeder
{
public static $emails = [
    [
        'people_id' => 1,
        'email' => 'john@example.com',
        'main' => true,
        'marks' => 'Gmail',
        'is_notify' => true,
    ],

    [
        'people_id' => 2,
        'email' => 'jane@example.com',
        'main' => true,
        'marks' => 'Hotmail',
        'is_notify' => false,
    ],

    [
        'people_id' => 3,
        'email' => 'bob@example.com',
        'main' => false,
        'marks' => 'Yahoo',
        'is_notify' => true,
    ],
];
    public function run()
    {

        foreach (self::$emails as $email) {
            DB::table('emails')->insert([
                'people_id' => $email['people_id'],
                'email' => $email['email'],
                'main' => $email['main'],
                'marks' => $email['marks'],
                'is_notify' => $email['is_notify'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
