<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'username' => 'kennet',
            'password' => bcrypt('jose'),
            'role' => 'master'
        ]);

        DB::table('users')->insert([
            'username' => 'vincent',
            'password' => bcrypt('mautauaja7'),
            'role' => 'admin'
        ]);
    }
}
