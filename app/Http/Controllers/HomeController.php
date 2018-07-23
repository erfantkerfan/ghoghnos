<?php

namespace App\Http\Controllers;

use App\Player;
use App\Score;
use App\User;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        return view('welcome');
    }
    public function index()
    {
        $users = User::where('id','!=','49')->with('Score')->get();
        foreach ($users as $user){
            $user->ss = Score::Find($user->id)->final();
        }
        $users = $users->sortByDesc('ss');
        return view('home')->with(['players'=>$users]);
    }
    public function map()
    {
        $users = User::where('location','!=',null)->get(['id','location']);
        $i = 0;
        $locations = array();
        foreach ($users as $user) {
            $locations[$i][0] = str_before($user->id,' ');
            $locations[$i][1] = str_before($user->location,',');
            $locations[$i][2] = str_after($user->location,',');
            $i +=1;
        }
        return view('map')->with(['locations'=>$locations]);
    }
}
