<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    //

    public function index(){
        $team = Team::all();
        return view('welcome', ['team' => $team]);
    }

}