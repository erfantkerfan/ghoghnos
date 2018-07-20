<?php

namespace App\Http\Controllers;

use App\Game;
use App\Masterkey;
use App\Player;
use App\Point;
use App\Score;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class GetController extends Controller
{
    public function __construct(Request $request)
    {
        $id = $request->route('id');
        $this->game_id = basename(url()->current());
        $this->game = Game::Find($id);
        $this->player = Player::Find($id);
    }
    public function g_2()
    {
        $text = $this->game->q_2_1;
        $q = $this->game->q_2_2;
        $ma = $this->game->q_2_3;
        return response()->json(['text'=>$text,'q'=>$q,'ma'=>$ma]);
    }
    public function g_4()
    {
        $q_1 = $this->game->q_4_1;
        $q_2 = $this->game->q_4_2;
        $q_3 = $this->game->q_4_3;
        $q_4 = $this->game->q_4_4;
        $q_5 = $this->game->q_4_5;
        $q_6 = $this->game->q_4_6;
        $q_7 = $this->game->q_4_7;
        $q_8 = $this->game->q_4_8;
        $q_9 = $this->game->q_4_9;
        $q_10 = $this->game->q_4_10;
        $q_11 = $this->game->q_4_11;
        $q_12 = $this->game->q_4_12;
        $q_13 = $this->game->q_4_13;
        $q_14 = $this->game->q_4_14;
        $q_15 = $this->game->q_4_15;
        $q_16 = $this->game->q_4_16;
        return response()->json([
        'q_1' => $q_1,
        'q_2' => $q_2,
        'q_3' => $q_3,
        'q_4' => $q_4,
        'q_5' => $q_5,
        'q_6' => $q_6,
        'q_7' => $q_7,
        'q_8' => $q_8,
        'q_9' => $q_9,
        'q_10' => $q_10,
        'q_11' => $q_11,
        'q_12' => $q_12,
        'q_13' => $q_13,
        'q_14' => $q_14,
        'q_15' => $q_15,
        'q_16' => $q_16,
        ]);
    }

    public function g_7()
    {
        $q_7 = $this->game->q_7;
        return response()->json(['q_7'=>$q_7]);
    }

    public function g_8()
    {
        $q_8 = $this->game->q_8;
        return response()->json(['q_8'=>$q_8]);
    }

    public function g_10()
    {
        $q_10 = $this->game->q_10;
        return response()->json(['q_10'=>$q_10]);
    }
}
