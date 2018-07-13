<?php

use Illuminate\Database\Seeder;

class MasterkeyTableSeeder extends Seeder
{

    public function run()
    {
        $key = [376592,683641,808284,534701,625845,209941,614345,152068,666570,379977];
        for ($i=0;$i<=9;$i++) {
            \App\Masterkey::create([
                'game_id' => $i+1,
                'key' => $key[$i],
            ]);
        }
    }
}