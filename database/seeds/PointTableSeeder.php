<?php

use Illuminate\Database\Seeder;

class PointTableSeeder extends Seeder
{

    public function run()
    {
        $pointss = [20,25,15,30,15,10,20,25,30,25];
        for ($i=0;$i<=9;$i++) {
            \App\Point::create([
                'game_id' => $i+1,
                'points' => $pointss[$i],
            ]);
        }
    }
}