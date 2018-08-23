<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{

    public function run()
    {
        $game_id = [1,3,5,9];
        $location = ['36.949808,50.612247','36.950954,50.612381','36.949928,50.612018','36.951481,50.613026'];
        for ($i=0;$i<=3;$i++) {
            \App\Location::create([
                'game_id' => $game_id[$i],
                'location' => $location[$i],
            ]);
        }
    }
}