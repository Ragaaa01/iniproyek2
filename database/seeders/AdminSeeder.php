<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(array(
            ['name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'is_admin'=> 1]
        ));
    }
}
