<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Player;

class Score extends Model
{
    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function final()
    {
       return $this->sum('lvl_1','lvl_2','lvl_3','lvl_4','lvl_5','lvl_6','lvl_7','lvl_8','lvl_9','lvl_10') ;
    }
}
