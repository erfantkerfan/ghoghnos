<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','login','start','state','location','admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','id'
    ];
    public function score()
    {
        return $this->hasOne(Score::class);
    }

    public function pass()
    {
        $pass = 0;
        $score = Score::Find($this->id);
        $array = ['lvl_1','lvl_2','lvl_3','lvl_4','lvl_5','lvl_6','lvl_7','lvl_8','lvl_9','lvl_10'];
        foreach ($array as $var) {
            if ($score->$var != 0) {
                $pass += 1;
            }

        }
        return $pass;
    }
}
