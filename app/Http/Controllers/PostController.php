<?php

namespace App\Http\Controllers;

use App\Game;
use App\Masterkey;
use App\Player;
use App\Point;
use App\Score;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{

    public function p_1(Request $request)
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $game_id = basename(url()->current());
        $point = Point::Find($game_id)->points;
        $masterkey = Masterkey::Find($game_id)->key;
        $game = Game::Find($id);
        $score = Score::Find($id);
        $ended = Score::Find($id)->ended();
        if($user->state!=1){
            return redirect(route('start'));
        }
        if ($game->a_1 == $request->var || $masterkey == $request->var){
            $user->state = 2;
            $user->save();
            if($game->a_1 == $request->var){
                $score->lvl_1 = $point;
            }elseif ($masterkey == $request->var){
                $score->lvl_1 = -1;
            }
            $score->save();

            if($user->state==$user->start){
                $user->start = null;
                $user->save();
                if($ended){
                    return view('horey');
                }else{
                    return view('ridihorey');
                }

            }
            return redirect(route('g_2'));
        }else{
            Session::flash('flash','کد وارد شده غلط می باشد');
            return back();
        }
    }

    public function p_2(Request $request)
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $game_id = basename(url()->current());
        $point = Point::Find($game_id)->points;
        $masterkey = Masterkey::Find($game_id)->key;
        $game = Game::Find($id);
        $score = Score::Find($id);
        $ended = Score::Find($id)->ended();
        if($user->state!=2){
            return redirect(route('start'));
        }
        if ($game->a_2 == $request->var || $masterkey == $request->var){
            $user->state = 3;
            $user->save();
            if($game->a_2 == $request->var){
                $score->lvl_2 = $point;
            }elseif ($masterkey == $request->var){
                $score->lvl_2 = -1;
            }
            $score->save();

            if($user->state==$user->start){
                $user->start = null;
                $user->save();
                if($ended){
                    return view('horey');
                }else{
                    return view('ridihorey');
                }

            }
            return redirect(route('g_3'));
        }else{
            Session::flash('flash','کد وارد شده غلط می باشد');
            return back();
        }
    }

    public function p_3(Request $request)
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $game_id = basename(url()->current());
        $point = Point::Find($game_id)->points;
        $masterkey = Masterkey::Find($game_id)->key;
        $game = Game::Find($id);
        $score = Score::Find($id);
        $ended = Score::Find($id)->ended();
        if($user->state!=3){
            return redirect(route('start'));
        }
        if ($game->a_3 == $request->var || $masterkey == $request->var){
            $user->state = 4;
            $user->save();
            if($game->a_3 == $request->var){
                $score->lvl_3 = $point;
            }elseif ($masterkey == $request->var){
                $score->lvl_3 = -1;
            }
            $score->save();

            if($user->state==$user->start){
                $user->start = null;
                $user->save();
                if($ended){
                    return view('horey');
                }else{
                    return view('ridihorey');
                }

            }
            return redirect(route('g_4'));
        }else{
            Session::flash('flash','کد وارد شده غلط می باشد');
            return back();
        }
    }

    public function p_4(Request $request)
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $game_id = basename(url()->current());
        $point = Point::Find($game_id)->points;
        $masterkey = Masterkey::Find($game_id)->key;
        $game = Game::Find($id);
        $score = Score::Find($id);
        $ended = Score::Find($id)->ended();
        if($user->state!=4){
            return redirect(route('start'));
        }
        if ($game->a_4 == $request->var || $masterkey == $request->var){
            $user->state = 5;
            $user->save();
            if($game->a_4 == $request->var){
                $score->lvl_4 = $point;
            }elseif ($masterkey == $request->var){
                $score->lvl_4 = -1;
            }
            $score->save();

            if($user->state==$user->start){
                $user->start = null;
                $user->save();
                if($ended){
                    return view('horey');
                }else{
                    return view('ridihorey');
                }

            }
            return redirect(route('g_5'));
        }else{
            Session::flash('flash','کد وارد شده غلط می باشد');
            return back();
        }
    }

    public function p_5(Request $request)
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $game_id = basename(url()->current());
        $point = Point::Find($game_id)->points;
        $masterkey = Masterkey::Find($game_id)->key;
        $game = Game::Find($id);
        $score = Score::Find($id);
        $ended = Score::Find($id)->ended();
        if($user->state!=5){
            return redirect(route('start'));
        }
        if ($game->a_5 == $request->var || $masterkey == $request->var){
            $user->state = 6;
            $user->save();
            if($game->a_5 == $request->var){
                $score->lvl_5 = $point;
            }elseif ($masterkey == $request->var){
                $score->lvl_5 = -1;
            }
            $score->save();

            if($user->state==$user->start){
                $user->start = null;
                $user->save();
                if($ended){
                    return view('horey');
                }else{
                    return view('ridihorey');
                }

            }
            return redirect(route('g_6'));
        }else{
            Session::flash('flash','کد وارد شده غلط می باشد');
            return back();
        }
    }

    public function p_6(Request $request)
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $game_id = basename(url()->current());
        $point = Point::Find($game_id)->points;
        $masterkey = Masterkey::Find($game_id)->key;
        $game = Game::Find($id);
        $score = Score::Find($id);
        $ended = Score::Find($id)->ended();
        if($user->state!=6){
            return redirect(route('start'));
        }
        if ($game->a_6 == $request->var || $masterkey == $request->var){
            $user->state = 7;
            $user->save();
            if($game->a_6 == $request->var){
                $score->lvl_6 = $point;
            }elseif ($masterkey == $request->var){
                $score->lvl_6 = -1;
            }
            $score->save();

            if($user->state==$user->start){
                $user->start = null;
                $user->save();
                if($ended){
                    return view('horey');
                }else{
                    return view('ridihorey');
                }

            }
            return redirect(route('g_7'));
        }else{
            Session::flash('flash','کد وارد شده غلط می باشد');
            return back();
        }
    }

    public function p_7(Request $request)
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $game_id = basename(url()->current());
        $point = Point::Find($game_id)->points;
        $masterkey = Masterkey::Find($game_id)->key;
        $game = Game::Find($id);
        $score = Score::Find($id);
        $ended = Score::Find($id)->ended();
        if($user->state!=7){
            return redirect(route('start'));
        }
        if ($game->a_7 == $request->var || $masterkey == $request->var){
            $user->state = 8;
            $user->save();
            if($game->a_7 == $request->var){
                $score->lvl_7 = $point;
            }elseif ($masterkey == $request->var){
                $score->lvl_7 = -1;
            }
            $score->save();

            if($user->state==$user->start){
                $user->start = null;
                $user->save();
                if($ended){
                    return view('horey');
                }else{
                    return view('ridihorey');
                }

            }
            return redirect(route('g_8'));
        }else{
            Session::flash('flash','کد وارد شده غلط می باشد');
            return back();
        }
    }

    public function p_8(Request $request)
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $game_id = basename(url()->current());
        $point = Point::Find($game_id)->points;
        $masterkey = Masterkey::Find($game_id)->key;
        $game = Game::Find($id);
        $score = Score::Find($id);
        $ended = Score::Find($id)->ended();
        if($user->state!=8){
            return redirect(route('start'));
        }
        if ($game->a_8 == $request->var || $masterkey == $request->var){
            $user->state = 9;
            $user->save();
            if($game->a_8 == $request->var){
                $score->lvl_8 = $point;
            }elseif ($masterkey == $request->var){
                $score->lvl_8 = -1;
            }
            $score->save();

            if($user->state==$user->start){
                $user->start = null;
                $user->save();
                if($ended){
                    return view('horey');
                }else{
                    return view('ridihorey');
                }

            }
            return redirect(route('g_9'));
        }else{
            Session::flash('flash','کد وارد شده غلط می باشد');
            return back();
        }
    }

    public function p_9(Request $request)
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $game_id = basename(url()->current());
        $point = Point::Find($game_id)->points;
        $masterkey = Masterkey::Find($game_id)->key;
        $game = Game::Find($id);
        $score = Score::Find($id);
        $ended = Score::Find($id)->ended();
        if($user->state!=9){
            return redirect(route('start'));
        }
        if ($game->a_9 == $request->var || $masterkey == $request->var){
            $user->state = 10;
            $user->save();
            if($game->a_9 == $request->var){
                $score->lvl_9 = $point;
            }elseif ($masterkey == $request->var){
                $score->lvl_9 = -1;
            }
            $score->save();

            if($user->state==$user->start){
                $user->start = null;
                $user->save();
                if($ended){
                    return view('horey');
                }else{
                    return view('ridihorey');
                }

            }
            return redirect(route('g_10'));
        }else{
            Session::flash('flash','کد وارد شده غلط می باشد');
            return back();
        }
    }

    public function p_10(Request $request)
    {
        $user = Auth::user();
        $id = Auth::user()->id;
        $game_id = basename(url()->current());
        $point = Point::Find($game_id)->points;
        $masterkey = Masterkey::Find($game_id)->key;
        $game = Game::Find($id);
        $score = Score::Find($id);
        $ended = Score::Find($id)->ended();
        $hidden = $request->hidden;
        if($user->state!=10){
            return redirect(route('start'));
        }
        if($request->var == null){
            $game = Game::Find(Auth::user()->id);
            $q_10 = $game->q_10;
            Session::flash('flash','کلمه ای وارد نکردید');
            return back()->with(['hidden'=>$hidden,'q'=>$q_10]);
        }
        elseif ($game->a_10_1 == $request->var) {
            $score->lvl_10 = $score->lvl_10 + strlen($request->var)/2;
            $hidden = $request->hidden.','.$game->a_10_1;
            $game->a_10_1 = null;
        }
        elseif ($game->a_10_2 == $request->var) {
            $score->lvl_10 = $score->lvl_10 + strlen($request->var)/2;
            $hidden = $request->hidden.','.$game->a_10_2;
            $game->a_10_2 = null;
        }
        elseif ($game->a_10_3 == $request->var) {
            $score->lvl_10 = $score->lvl_10 + strlen($request->var)/2;
            $hidden = $request->hidden.','.$game->a_10_3;
            $game->a_10_3 = null;
        }
        elseif ($game->a_10_4 == $request->var) {
            $score->lvl_10 = $score->lvl_10 + strlen($request->var)/2;
            $hidden = $request->hidden.','.$game->a_10_4;
            $game->a_10_4 = null;
        }
        elseif ($game->a_10_5 == $request->var) {
            $score->lvl_10 = $score->lvl_10 + strlen($request->var)/2;
            $hidden = $request->hidden.','.$game->a_10_5;
            $game->a_10_5 = null;
        }
        elseif ($game->a_10_6 == $request->var) {
            $score->lvl_10 = $score->lvl_10 + strlen($request->var)/2;
            $hidden = $request->hidden.','.$game->a_10_6;
            $game->a_10_6 = null;
        }
        elseif ($game->a_10_7 == $request->var) {
            $score->lvl_10 = $score->lvl_10 + strlen($request->var)/2;
            $hidden = $request->hidden.','.$game->a_10_7;
            $game->a_10_7 = null;
        }
        elseif ($masterkey == $request->var){
            if ($score->lvl_10 == 0){
                $score->lvl_10 = -1;
                $score->save();
            }
                $user->state = 1;
                $user->save();
                if($user->state==$user->start){
                    if($ended && $score->lvl_10 == $point){
                        $user->start = null;
                        $user->save();
                        return view('horey');
                    }else{
                        return view('ridihorey');
                    }
                }
                return view('games.1');
        }
        else{
            $game = Game::Find(Auth::user()->id);
            $q_10 = $game->q_10;
            Session::flash('flash','کلمه وارد شده غلط می باشد');
            return view('games.10')->with(['hidden'=>$hidden,'q'=>$q_10]);
        }
        $score->save();
        $game->save();

        if($score->lvl_10 == 25 || $score->lvl_10 == -1){
            $user->state = 1;
            $user->save();
            if($user->state==$user->start){
                if($ended && $score->lvl_10 == $point){
                    $user->start = null;
                    $user->save();
                    return view('horey');
                }else{
                    return view('ridihorey');
                }
            }
            return redirect(route('g_1'));
        }else{
            $game = Game::Find(Auth::user()->id);
            $q_10 = $game->q_10;
            return view('games.10')->with(['hidden'=>$hidden,'q'=>$q_10]);
        }
    }
}
