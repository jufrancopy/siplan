<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Julio Franco",
            'email' => "jucfra23@gmail.com",
            'password' => bcrypt('jcf3458435'),
        ]);
    }
}
