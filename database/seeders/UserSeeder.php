<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'first_name' => 'Ruud',
                'last_name' => 'Hermans',
                'email' => 'info@ruud-hermans.nl',
                'password' => Hash::make('password'),
                'role_id' => '1',
                'address' => 'straatnaam 1',
                'city' => 'groningen',
                'country' => 'netherlands',
                'postal_code' => '1234AB',
                'phone_number' => '0612345678',
                
            ],
            [
                'id' => 2,
                'first_name' => 'Maurice',
                'last_name' => 'DT',
                'email' => 'maurice@maurice.maurice',
                'password' => Hash::make('password'),
                'role_id' => '1',
                'address' => 'straatnaam 1',
                'city' => 'groningen',
                'country' => 'netherlands',
                'postal_code' => '1234AB',
                'phone_number' => '0612345678',
            ],
            [
                'id' => 3,
                'first_name' => 'Xander',
                'last_name' => 'Hageman',
                'email' => 'xander@xander.xander',
                'password' => Hash::make('password'),
                'role_id' => '1',
                'address' => 'straatnaam 1',
                'city' => 'groningen',
                'country' => 'netherlands',
                'postal_code' => '1234AB',
                'phone_number' => '0612345678',
            ]

        ]);
    }
}
