<?php

use Illuminate\Database\Seeder;

class ScoreTableSeeder extends Seeder
{

    public function run()
    {
        for ($i=1;$i<=48;$i++) {
            \App\Score::create([
                'user_id' => $i,
            ]);
        }
    }
}