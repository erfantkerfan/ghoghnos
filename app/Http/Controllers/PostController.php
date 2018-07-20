<?php

namespace App\Http\Controllers;

use App\Game;
use App\Masterkey;
use App\Player;
use App\Point;
use App\Score;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostController extends Controller
{
    public function __construct(Request $request)
    {
        $id = $request->route('id');
        $this->game_id = basename(url()->current());
        $this->point = Point::Find($this->game_id)->points;
        $this->masterkey = Masterkey::Find($this->game_id)->key;
        $this->game = Game::Find($id);
        $this->player = Player::Find($id);
        $this->score = Score::Find($id);
        $this->ended = Score::Find($id)->ended();
    }

    public function p_1(Request $request)
    {
        if ($this->game->a_1 == $request->var || $this->masterkey == $request->var){
            $this->player->state = 2;
            $this->player->save();
            if($this->game->a_1 == $request->var){
                $this->score->lvl_1 = $this->point;
            }elseif ($this->masterkey == $request->var){
                $this->score->lvl_1 = -1;
            }
            $this->score->save();

            if($this->player->state==$this->player->start){
                if($this->ended){
                    return response()->json([],250);
                }else{
                    return response()->json([],260);
                }

            }
            return response()->json(['lvl'=>$this->player->state],200);
        }else{
            return response()->json([],201);
        }
    }

    public function p_2(Request $request)
    {
        if ($this->game->a_2 == $request->var || $this->masterkey == $request->var){
            $this->player->state = 3;
            $this->player->save();
            if($this->game->a_2 == $request->var){
                $this->score->lvl_2 = $this->point;
            }elseif ($this->masterkey == $request->var){
                $this->score->lvl_2 = -1;
            }
            $this->score->save();

            if($this->player->state==$this->player->start){
                if($this->ended){
                    return response()->json([],250);
                }else{
                    return response()->json([],260);
                }

            }
            return response()->json(['lvl'=>$this->player->state],200);
        }else{
            return response()->json([],202);
        }
    }

    public function p_3(Request $request)
    {
        if ($this->game->a_3 == $request->var || $this->masterkey == $request->var){
            $this->player->state = 4;
            $this->player->save();
            if($this->game->a_3 == $request->var){
                $this->score->lvl_3 = $this->point;
            }elseif ($this->masterkey == $request->var){
                $this->score->lvl_3 = -1;
            }
            $this->score->save();

            if($this->player->state==$this->player->start){
                if($this->ended){
                    return response()->json([],250);
                }else{
                    return response()->json([],260);
                }

            }
            return response()->json(['lvl'=>$this->player->state],200);
        }else{
            return response()->json([],203);
        }
    }

    public function p_4(Request $request)
    {
        if ($this->game->a_4 == $request->var || $this->masterkey == $request->var){
            $this->player->state = 5;
            $this->player->save();
            if($this->game->a_4 == $request->var){
                $this->score->lvl_4 = $this->point;
            }elseif ($this->masterkey == $request->var){
                $this->score->lvl_4 = -1;
            }
            $this->score->save();

            if($this->player->state==$this->player->start){
                if($this->ended){
                    return response()->json([],250);
                }else{
                    return response()->json([],260);
                }

            }
            return response()->json(['lvl'=>$this->player->state],200);
        }else{
            return response()->json([],204);
        }
    }

    public function p_5(Request $request)
    {
        if ($this->game->a_5 == $request->var || $this->masterkey == $request->var){
            $this->player->state = 6;
            $this->player->save();
            if($this->game->a_5 == $request->var){
                $this->score->lvl_5 = $this->point;
            }elseif ($this->masterkey == $request->var){
                $this->score->lvl_5 = -1;
            }
            $this->score->save();

            if($this->player->state==$this->player->start){
                if($this->ended){
                    return response()->json([],250);
                }else{
                    return response()->json([],260);
                }

            }
            return response()->json(['lvl'=>$this->player->state],200);
        }else{
            return response()->json([],205);
        }
    }

    public function p_6(Request $request)
    {
        if ($this->game->a_6 == $request->var || $this->masterkey == $request->var){
            $this->player->state = 7;
            $this->player->save();
            if($this->game->a_6 == $request->var){
                $this->score->lvl_6 = $this->point;
            }elseif ($this->masterkey == $request->var){
                $this->score->lvl_6 = -1;
            }
            $this->score->save();

            if($this->player->state==$this->player->start){
                if($this->ended){
                    return response()->json([],250);
                }else{
                    return response()->json([],260);
                }

            }
            return response()->json(['lvl'=>$this->player->state],200);
        }else{
            return response()->json([],206);
        }
    }

    public function p_7(Request $request)
    {
        if ($this->game->a_7 == $request->var || $this->masterkey == $request->var){
            $this->player->state = 8;
            $this->player->save();
            if($this->game->a_7 == $request->var){
                $this->score->lvl_7 = $this->point;
            }elseif ($this->masterkey == $request->var){
                $this->score->lvl_7 = -1;
            }
            $this->score->save();

            if($this->player->state==$this->player->start){
                if($this->ended){
                    return response()->json([],250);
                }else{
                    return response()->json([],260);
                }

            }
            return response()->json(['lvl'=>$this->player->state],200);
        }else{
            return response()->json([],207);
        }
    }

    public function p_8(Request $request)
    {
        if ($this->game->a_8 == $request->var || $this->masterkey == $request->var){
            $this->player->state = 9;
            $this->player->save();
            if($this->game->a_8 == $request->var){
                $this->score->lvl_8= $this->point;
            }elseif ($this->masterkey == $request->var){
                $this->score->lvl_8 = -1;
            }
            $this->score->save();

            if($this->player->state==$this->player->start){
                if($this->ended){
                    return response()->json([],250);
                }else{
                    return response()->json([],260);
                }

            }
            return response()->json(['lvl'=>$this->player->state],200);
        }else{
            return response()->json([],208);
        }
    }

    public function p_9(Request $request)
    {
        if ($this->game->a_9 == $request->var || $this->masterkey == $request->var){
            $this->player->state = 10;
            $this->player->save();
            if($this->game->a_9 == $request->var){
                $this->score->lvl_9= $this->point;
            }elseif ($this->masterkey == $request->var){
                $this->score->lvl_9 = -1;
            }
            $this->score->save();

            if($this->player->state==$this->player->start){
                if($this->ended){
                    return response()->json([],250);
                }else{
                    return response()->json([],260);
                }

            }
            return response()->json(['lvl'=>$this->player->state],200);
        }else{
            return response()->json([],209);
        }
    }

    public function p_10(Request $request)
    {
        if($request->var == null){
            return response()->json([],210);
        }
        elseif ($this->game->a_10_1 == $request->var) {
            $this->score->lvl_10 = $this->score->lvl_10 + strlen($request->var)/2;
            $this->game->a_10_1 = null;
        }
        elseif ($this->game->a_10_2 == $request->var) {
            $this->score->lvl_10 = $this->score->lvl_10 + strlen($request->var)/2;
            $this->game->a_10_2 = null;
        }
        elseif ($this->game->a_10_3 == $request->var) {
            $this->score->lvl_10 = $this->score->lvl_10 + strlen($request->var)/2;
            $this->game->a_10_3 = null;
        }
        elseif ($this->game->a_10_4 == $request->var) {
            $this->score->lvl_10 = $this->score->lvl_10 + strlen($request->var)/2;
            $this->game->a_10_4 = null;
        }
        elseif ($this->game->a_10_5 == $request->var) {
            $this->score->lvl_10 = $this->score->lvl_10 + strlen($request->var)/2;
            $this->game->a_10_5 = null;
        }
        elseif ($this->game->a_10_6 == $request->var) {
            $this->score->lvl_10 = $this->score->lvl_10 + strlen($request->var)/2;
            $this->game->a_10_6 = null;
        }
        elseif ($this->game->a_10_7 == $request->var) {
            $this->score->lvl_10 = $this->score->lvl_10 + strlen($request->var)/2;
            $this->game->a_10_7 = null;
        }
        elseif ($this->masterkey == $request->var){
            if ($this->score->lvl_10 == 0){
                $this->score->lvl_10 = -1;
                $this->score->save();
                $this->player->state = 1;
                $this->player->save();
                if($this->player->state==$this->player->start){
                    if($this->ended && $this->score->lvl_10 == $this->point){
                        return response()->json([],250);
                    }else{
                        return response()->json([],260);
                    }
                }
                return response()->json(['lvl'=>$this->player->state],200);
            }
        }
        else{
            return response()->json([],210);
        }
        $this->score->save();
        $this->game->save();

        if($this->score->lvl_10 == 25 || $this->score->lvl_10 == -1){
            $this->player->state = 1;
            $this->player->save();
            if($this->player->state==$this->player->start){
                if($this->ended && $this->score->lvl_10 == $this->point){
                    return response()->json([],250);
                }else{
                    return response()->json([],260);
                }
            }
            return response()->json(['lvl'=>$this->player->state],200);
        }else{
            return response()->json([],211);
        }
    }
}
