<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamificationController extends Controller
{
    public function getLeaderboard(){
        return view('gamification/ranking_dashboard');
    }
}
