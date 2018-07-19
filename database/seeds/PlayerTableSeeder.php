<?php

use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{

    public function run()
    {
        $pass = ['000801','005902','013103','013304','013605','013906','014807','015708','020209','020610','020911',
            '021412','021813','022014','022215','022316','022517','022918','023719','023920','024121','024222','024723',
            '025124',
            //second Day
            '000825','005926','013127','013328','013629','013930','014831','015732','020233','020634','020935','021436'
            ,'021837','022038','022239','022340','022541','022942','023743','023944','024145','024246','024747','025148'
            ];
        $start = [1,2,3,4,7,8,9,10,1,2,3,4,7,8,9,10,1,2,3,4,7,8,9,10,1,2,3,4,7,8,9,10,
            1,2,3,4,7,8,9,10,1,2,3,4,7,8,9,10];
        for ($i=0;$i<=47;$i++) {
            \App\Player::create([
                'pass' => $pass[$i],
                'start' => $start[$i],
            ]);
        }
    }
}