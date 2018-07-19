<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{

    public function run()
    {
        $game_id = [1,3,5,9];
        $location = ['','','',''];
        for ($i=0;$i<=3;$i++) {
            \App\Location::create([
                'game_id' => $game_id[$i],
                'location' => $location[$i],
            ]);
        }
    }
}