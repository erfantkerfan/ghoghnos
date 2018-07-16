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
}
