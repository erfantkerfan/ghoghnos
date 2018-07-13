<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['player_id','a_1','q_2_1','q_2_2','q_2_3','a_2','a_3','q_4_1','q_4_2','q_4_3','q_4_4','q_4_5','q_4_6',
        'q_4_7','q_4_8','q_4_9','q_4_10','q_4_11','q_4_12','q_4_13','q_4_14','q_4_15','q_4_16','a_4','a_5','a_6',
        'q_7','a_7','q_8','a_8','a_9','q_10','a_10_1','a_10_2','a_10_3','a_10_4','a_10_5','a_10_6','a_10_7'];
}
