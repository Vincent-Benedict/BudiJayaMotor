<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'type_name' => 'Sedan'
        ]);

        DB::table('types')->insert([
            'type_name' => 'Minivan MPV'
        ]);

        DB::table('types')->insert([
            'type_name' => 'SUV'
        ]);

        DB::table('types')->insert([
            'type_name' => 'Avanza'
        ]);
    }
}
