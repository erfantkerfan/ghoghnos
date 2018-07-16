<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        \App\User::create([
            'username' => 'erfan',
            'password' => bcrypt('erfan'),
            'remember_token' => str_random(10),
        ]);
    }
}