<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Challenge;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        Http::post('http://api.tenenet.net/createPlayer?token=79ee4fb9f158e60ba55674ecb8ed249a&alias='.$data['email'].'&id=&fname='.$data['name'].'&lname=');
        Http::post('api.tenenet.net/insertPlayerActivity?token=79ee4fb9f158e60ba55674ecb8ed249a&alias='.$data['email'].'&id=alpha_badge_point&operator=add&value=0');
        Challenge::create([
            "daily_login"=> false,
            "open_leaderboard" => false,
            "week_start_date" => date("Y-m-d H:i:s"),
            "week_end_date" => date("Y-m-d H:i:s", strtotime('+7 days')),
            "create_event_count"=> 0,
            "invitation_count"=> 0,
            'invitation_achieved'=> false,
            'create_event_achieved' => false,
            "user_email" => $data['email'],
        ]);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'image' => "avatar1_small.jpg",
            'active_until' => date("Y-m-d H:i:s", strtotime('+30 days')),
            'login_days' => 0,
            'invitation_count' => 0,
            'create_event_count' => 0, 
            'finish_event_count' => 0,
            'invitation_card_amount' => 1,
            'password' => Hash::make($data['password']),
        ]);
    }
}
