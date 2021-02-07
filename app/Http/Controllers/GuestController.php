<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
class GuestController extends Controller
{
    public function addGuest(){
        
        $guest = new Guest();
        $user = User::where("email", request("email"))->first();
        $eventid = request("id");
        if($user != null){
            $guest->Guest_id =  $user->id;
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
       
        return redirect("/events/guests/all_guest_list/{$eventid}");
        
       
    }
    public function readAllGuest($eventid){
        $guests = DB::table('guests')
            ->join('users', 'users.id', '=', 'guests.Guest_id')
            ->where("Event_id", $eventid)
            ->get();
        $eventName = Event::where('Event_id',$eventid)->value('Event_name');
        return view("/events/guests/all_guest_list", ["guests" => $guests, "id" => $eventid, "eventname" => $eventName]);
    }
    public function readGuestList($eventid){
        $guestList = Guest::where([["Event_id", $eventid], ["Guest_list", "!=", "-"]])->distinct()->get(['Guest_list']);
        $event = Event::where("Event_id", $eventid)->get()->first();
        return view("/events/guests/guest_list", ["guestList" => $guestList, "event" => $event]);
    }
    public function readUnassignedGuest($eventid){
        $guests = Guest::join('users', 'guests.Guest_id', '=', 'users.id')
        ->where([["guests.Event_id", $eventid],["guests.Guest_list", "-"]])
        ->get();
        $eventName = Event::where('Event_id',$eventid)->value('Event_name');
        return view("/events/guests/add_guest_list", ["guests" => $guests, "id" => $eventid, "eventname" => $eventName]);
    }
    public function accessAddGuestForm($id){
        return view('events/guests/add_guest', ['id' => $id] );
    }
    public function createGuestList(){
        $guestListName = request('guest-list-name');
        $eventid = request('event-id');
        $guestidList = request('id');
        if($guestidList == null){
            return redirect("events/guests/add_guest_list/$eventid")->with("message", "No guest is selected.");;
        }else{
            foreach($guestidList as $guestid){
                $guest = Guest::where([["Event_id", $eventid], ["Guest_id", $guestid]])->first();
                $guest->Guest_list = $guestListName;
                $guest->save();
            }
            return redirect("events/guests/add_guest_list/$eventid");
        }
    }
    public function deleteGuestList($eventid, $guestlistname){
        $guestList = Guest::where([["Event_id", $eventid],["Guest_list", $guestlistname]])->get();
        foreach($guestList as $guest){
            $guest->Guest_list = "-";
            $guest->save();
        }
        return redirect("events/guests/guest_list/$eventid");
    }
    public function readGuestListDetails($eventid, $guestlistname){
        $guestListDetails = Guest::join("users", "guests.Guest_id", "users.id")
        ->where([["Event_id", $eventid],["Guest_list", $guestlistname]])->get();
        $eventName = Event::where('Event_id',$eventid)->value('Event_name');
        return view("events/guests/edit_guest_list", ["eventid"=> $eventid, "guests"=>$guestListDetails,"eventname" => $eventName]);
    }
    public function updateGuestList(){
        $guestListName = request('guest-list-name');
        $eventid = request('event-id');
        $guestidList = request('id');
        $guestList = Guest::where([["Guest_list", request('original-guest-list-name')],["Event_id", $eventid]])->get();
        if($guestidList == null){
            foreach($guestList as $guest){
                $guest->Guest_list = "-";
                $guest->save();
            }
            return redirect("events/guests/guest_list/$eventid");
        }else{
            $count = 0;
            foreach($guestList as $e){
                for($i = 0 ; $i < count($guestidList) ; $i++){
                    if($guestidList[$i] == $e->Guest_id){
                        $e->Guest_list = $guestListName;
                        $e->save();
                        break;
                    }
                    if($i+1 == count($guestidList) ){
                        $e->Guest_list = "-";
                        $e->save();
                    }
                }
            }
            return redirect("events/guests/guest_list/$eventid");
        }
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
