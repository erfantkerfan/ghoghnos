<?php

namespace App\Http\Controllers;

use App\Game;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GetController extends Controller
{
    public function __construct(Request $request)
    {
//        $this->user = Auth::user();
//        var_dump($this->user);
//        $this->game_id = basename(url()->current());
//        $this->game = Game::Find($id);
//        $this->player = Player::Find($id);
    }
    public function g_1()
    {
        $user = Auth::user();
        if($user->state!=1){
            return redirect(route('start'));
        }
        return view('games.1');
    }
    public function g_2()
    {
        $user = Auth::user();
        if($user->state!=2){
            return redirect(route('start'));
        }
        $game = Game::Find(Auth::user()->id);
        $text = $game->q_2_1;
        $q = $game->q_2_2;
        $ma = $game->q_2_3;
        return view('games.2')->with(['text'=>$text,'q'=>$q,'ma'=>$ma]);
    }
    public function g_3()
    {
        $user = Auth::user();
        if($user->state!=3){
            return redirect(route('start'));
        }
        $game = Game::Find(Auth::user()->id);
        $text = $game->q_2_1;
        $q = $game->q_2_2;
        $ma = $game->q_2_3;
        return view('games.3')->with(['text'=>$text,'q'=>$q,'ma'=>$ma]);
    }
    public function g_4()
    {
        $user = Auth::user();
        if($user->state!=4){
            return redirect(route('start'));
        }
        $game = Game::Find(Auth::user()->id);
        $q_1 = $game->q_4_1;
        $q_2 = $game->q_4_2;
        $q_3 = $game->q_4_3;
        $q_4 = $game->q_4_4;
        $q_5 = $game->q_4_5;
        $q_6 = $game->q_4_6;
        $q_7 = $game->q_4_7;
        $q_8 = $game->q_4_8;
        $q_9 = $game->q_4_9;
        $q_10 = $game->q_4_10;
        $q_11 = $game->q_4_11;
        $q_12 = $game->q_4_12;
        $q_13 = $game->q_4_13;
        $q_14 = $game->q_4_14;
        $q_15 = $game->q_4_15;
        $q_16 = $game->q_4_16;
        return view('games.4')->with([
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
    public function g_5()
    {
        $user = Auth::user();
        if($user->state!=5){
            return redirect(route('start'));
        }
        return view('games.5');
    }
    public function g_6()
    {
        $user = Auth::user();
        if($user->state!=6){
            return redirect(route('start'));
        }
        return view('games.6');
    }
    public function g_7()
    {
        $user = Auth::user();
        if($user->state!=7){
            return redirect(route('start'));
        }
        $game = Game::Find(Auth::user()->id);
        $q_7 = $game->q_7;
        return view('games.7')->with(['q_7'=>$q_7]);
    }
    public function g_8()
    {
        $user = Auth::user();
        if($user->state!=8){
            return redirect(route('start'));
        }
        $game = Game::Find(Auth::user()->id);
        $q_8 = $game->q_8;
        return view('games.8')->with(['q_8'=>$q_8]);
    }
    public function g_9()
    {
        $user = Auth::user();
        if($user->state!=9){
            return redirect(route('start'));
        }
        return view('games.9');
    }
    public function g_10()
    {
        $user = Auth::user();
        if($user->state!=10){
            return redirect(route('start'));
        }
        $game = Game::Find(Auth::user()->id);
        $q_10 = $game->q_10;
        $hidden = null;
        return view('games.10')->with(['q'=>$q_10,'hidden'=>$hidden]);
    }
}
