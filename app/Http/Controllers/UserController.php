<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Get user information
    public function getUserInfo(){
        $user = Auth::user();
        $playerInfo = Http::post('http://api.tenenet.net/getPlayer?token=333eb0526f782a6de74735d9f97cb50c&alias='.$user->name);
        $badgeScore =  $playerInfo['message']['score'][1]['value'];
        $rewardScore =  $playerInfo['message']['score'][2]['value'];
        return view("gamification/gamification_profile", ["user" => $user, "rewardPoint" => $rewardScore, "badgePoint" => $badgeScore]);
    }
    public function editUserInfo(){
        $user = Auth::user();
        return view('gamification/user_profile', ["user" => $user]);
    }
    public function updateUser(){
        $user = Auth::user();
        $user->name = request("name");
        $user->email = request("email");
        $user->phone = request("phone");
        $user->save();
        return redirect("gamification/gamification_profile");
    }
}
