<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Get user information
    public function getUserInfo(){
        $user = Auth::user();
        return view("gamification/gamification_profile", ["user" => $user]);
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
