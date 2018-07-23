<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Player;

class Score extends Model
{
    protected $fillable = ['lvl_1','lvl_2','lvl_3','lvl_4','lvl_5','lvl_6','lvl_7','lvl_8','lvl_9','lvl_10'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function final()
    {
        $final = 0;
        $array = ['lvl_1','lvl_2','lvl_3','lvl_4','lvl_5','lvl_6','lvl_7','lvl_8','lvl_9','lvl_10'];
        foreach ($array as $var){
            if($this->$var>0){
            $final = $final + $this->$var;
            }
        }
       return $final;
    }

    public function ended()
    {
        $array = ['lvl_1','lvl_2','lvl_3','lvl_4','lvl_5','lvl_6','lvl_7','lvl_8','lvl_9','lvl_10'];
        foreach ($array as $var){
            if($this->$var==-1){
                return false;
            }
        }
        return true;
    }
}
