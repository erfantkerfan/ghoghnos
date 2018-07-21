<?php

namespace App\Http\Controllers;

use App\Player;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::with('Score')->get();
        return view('home')->with(['players'=>$players]);
    }


    public function AppDayOne()//    ToDo Fix This Shit
    {
        $pathToFile = public_path('app/1.jpg');
        return response()->download($pathToFile);
    }
    public function AppDayTwo()//    ToDo Fix This Shit
    {
        $pathToFile = public_path('app/2.jpg');
        return response()->download($pathToFile);
    }

    public function allow($id)
    {
        $player = Player::FindOrFail($id);
        $player->login = 0 ;
        $player->save();
        return back();
    }

    public function map()
    {
        if(config('app.timer')) {
            if ((Verta::parse(config('app.day1s'))->isPast() && Verta::parse(config('app.day1e'))->isFuture())) {
                $players = Player::where('id','<','25')->where('location','!=',null)->get(['id','location']);
            }
            if ((Verta::parse(config('app.day2s'))->isPast() && Verta::parse(config('app.day2e'))->isFuture())) {
                $players = Player::where('id','>','24')->where('location','!=',null)->get(['id','location']);
            }
        }
        $players = Player::where('location','!=',null)->get(['id','location']);
        $i = 0;
        foreach ($players as $player) {
            $locations[$i][0] = str_before($player->id,' ');
            $locations[$i][1] = str_before($player->location,',');
            $locations[$i][2] = str_after($player->location,',');
            $i +=1;
        }
//        return view('test')->with(['locations'=>$var]);
        return view('map')->with(['locations'=>$locations]);
    }
}
