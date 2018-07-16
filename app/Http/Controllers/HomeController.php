<?php

namespace App\Http\Controllers;

use App\Player;
use App\User;
use App\Score;
use Illuminate\Http\Request;

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
}
