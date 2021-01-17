<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class GuestController extends Controller
{
    public function addGuest(){
        $guest = new Guest();
        $user = User::where("email", request("email"))->get();
        $eventid = request("id");
        if(sizeof($user) == 1){
            $guest->Guest_id =  $user[0]->id;
            $guest->Event_id = request("id");
            $guest->Guest_list = "-";
            $guest->save();
            return redirect("/events/guests/all_guest_list/$eventid");
        }else{
            return redirect("/events/guests/add_guest/$eventid")->with("message", "User is not available.");
        }
    }
    public function deleteGuest($eventid, $guestid){
        $guest = Guest::where([['Event_id', "=" , $eventid], ['Guest_id', "=", $guestid]])->delete();;
       
        return view("/events/guests/all_guest_list");
        
       
    }
    public function readAllGuest($eventid){
        $guests = DB::table('guests')
            ->join('users', 'users.id', '=', 'guests.Guest_id')
            ->get();
        return view("/events/guests/all_guest_list", ["guests" => $guests, "id" => $eventid]);
    }
    public function readGuestList(){
        $eventid = 1;
        $guestList = Guest::where([["Event_id", $eventid], ["Guest_list", "!=", "-"]])->distinct()->get();
        return view("/events/guests/guest_list", ["guestList" => $guestList]);
    }
    public function readUnassignedGuest(){
        $eventid = 1;
        $guests = Guest::where([["Event_id", $eventid],["Guest_list", "-"]])->get();
        $users = array();
        foreach($guests as $user){
            $user = User::where("id", $user->Guest_id)->get()->first();
            if($user != null){
                array_push($users, $user);
                $user = null;
            }
        }
        
        return view("/events/guests/add_guest_list", ["guests" => $users, "id" => $id]);
    }
    public function accessAddGuestForm($id){
        return view('events/guests/add_guest', ['id' => $id] );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
