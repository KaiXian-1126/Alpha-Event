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
        $playerInfo = Http::post('http://api.tenenet.net/getPlayer?token=79ee4fb9f158e60ba55674ecb8ed249a&alias='.$user->email);
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
        Http::post('api.tenenet.net/updatePlayer?token=79ee4fb9f158e60ba55674ecb8ed249a&alias='.request("email").'&fname='.request("name").'lname=');
        return redirect("gamification/gamification_profile");
    }
}
