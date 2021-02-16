<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
                [
                'id' => 1,
                'name' => 'Superadmin',
                'label' => 'De superadmin die alles kan, koken, eten, afwassen, echt alles'
                ],
                [
                'id' => 2,
                'name' => 'Inventaris medewerker',
                'label' => 'Persoon die de inventaris bij kan werken: producten toevoegen e.d.'
                ]
        ]);
    }
}
