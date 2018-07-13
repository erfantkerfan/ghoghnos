<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function g_1()
    {
        $var = Player::all();
        return $var;
    }
}
