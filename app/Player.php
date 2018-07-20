<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Score;

class Player extends Model
{
    protected $fillable = ['pass','login','start','state','location'];

    public function score()
    {
        return $this->hasOne(Score::class);
    }

    public function lvlpass()
    {
        $lvlpass = 0;
        $array = ['lvl_1','lvl_2','lvl_3','lvl_4','lvl_5','lvl_6','lvl_7','lvl_8','lvl_9','lvl_10'];
        foreach ($array as $var)
            if($this->$var!=0){
                $lvlpass = $lvlpass + 1;
            }
        return $lvlpass;
    }
}
