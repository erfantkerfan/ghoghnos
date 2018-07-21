<?php

namespace App\Http\Controllers;

use App\Player;
use App\Score;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Hekmatinasser\Verta\Facades\Verta;

class GameController extends Controller
{
    public function start(Request $request)
    {
        $player = Player::where('pass','=',$request->pass)->get()->first();
        if (count($player)==1 and $player->login==0){
            $player->login = 1;
            if($player->state==null){
                $player->state = $player->start;
            }
            $player->save();
            return response()->json([
            'lvl' => $player->state,
            'id' => $player->id,
                ],200);
        }
        else{
            return response()->json([],400);
        }
    }

    public function location($id , Request $request)
    {
        $player = Player::Find($id);
        $player->location = $request->location;
        $player->save();
    }

    public function stat()
    {
        if ((Verta::parse(config('app.day1s'))->isPast() && Verta::parse(config('app.day1e'))->isFuture())) {

            $players = Player::where('id','<','25')->get(['id']);
            foreach ($players as $player){
                $player->lvlpass = $player->lvlpass();
                $player->score = Score::find($player->id)->final();
            }
            $players->sortByDesc('score');
            return response()->json($players);

        }elseif((Verta::parse(config('app.day1s'))->isPast() && Verta::parse(config('app.day1e'))->isFuture())){

            $players = Player::where('id','>','24')->get(['id']);
            foreach ($players as $player){
                $player->lvlpass = $player->lvlpass();
                $player->score = Score::find($player->id)->final();
            }
            $players->sortByDesc('score');
            return response()->json($players);
        }
        abort(270);
    }
}
