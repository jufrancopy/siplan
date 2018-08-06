<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name'=>'Julio Franco',
        	'email'=>'jucfra23@gmail.com',
        	'password'=>bcrypt('jcf3458435')
        ]);
    }
}
