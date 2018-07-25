<?php

namespace App\Http\Controllers;

use App\Score;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function start(Request $request)
    {
        $user = Auth::user();
        $ended = Score::Find($user->id)->ended();
        if($user->start==null){
            if($ended){
                return view('horey');
            }else{
                return view('ridihorey');
            }
        }
        if($user->state==null){
            $user->state = $user->start;
            $user->save();
        }

        return redirect(route('g_'.$user->state));
    }

    public function location($id , Request $request)
    {
        $user = Auth::user();
        $user->location = $request->location;
        $user->save();
    }

    public function stat()
    {
        $users = User::where('id','!=','49')->get();
        foreach ($users as $user) {
            $user->pass = $user->pass();
            $user->score = Score::find($user->id)->final();
        }
        $users = $users->sortByDesc('score');

        return view('table')->with(['users'=>$users]);
    }
}
