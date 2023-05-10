<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(DispatchingAgencySeeder::class);
        $this->call(SchoolingSeeder::class);
        $this->call(MatrialStatusSeeder::class);
        $this->call(NationalitySeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(WorkStatySeeder::class);
//        $this->call(AddressesTableSeeder::class);
//        $this->call(PeopleTableSeeder::class);
//        $this->call(EmailsTableSeeder::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
