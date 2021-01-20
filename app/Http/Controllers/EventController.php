<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function getAllEvents(){
        $nowDate = date("Y-m-d");
        $nowTime = date("H:i:s");
   
        $upcomingEvents = Member::join('events', 'events.Event_id', '=', 'members.Event_id')
                        ->select('members.*', 'events.*')
                        ->where('members.Member_id',auth()->user()->id)
                        ->where("Event_EndDate", ">", $nowDate)
                        ->orWhere([["events.Event_EndDate", $nowDate],["events.Event_EndTime", ">", $nowTime]])
                        ->get();
        $pastEvents =  Member::join('events', 'events.Event_id', '=', 'members.Event_id')
                        ->select('members.*', 'events.*')
                        ->where('members.Member_id',auth()->user()->id)
                        ->where("Event_EndDate", "<", $nowDate)
                        ->orWhere([["events.Event_EndDate", $nowDate],["events.Event_EndTime", "<", $nowTime]])
                        ->get();
        return view('/home', ["upcomingEvents"=>$upcomingEvents, "pastEvents"=>$pastEvents]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('/home')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Event();
        $event->Event_name = request("name");
        $event->Event_startDate = request("start_date");
        $event->Event_endDate = request("end_date");
        $event->Event_StartTime = request("start_time");
        $event->Event_EndTime = request("end_time");
        $event->Location = request("location");
        $event->Announcement = "";
        $event->Description = "";
        $event->save();

        //get newly added event id
        $id = Event::orderBy('Event_id', 'desc')->value('Event_id');
        // add user to member while create event
        $uid = User::where('id',auth()->user()->id)->value('id');
         $addmember = new Member();
         $addmember->Event_id = $id;
         $addmember->Member_id = $uid;
         $addmember->Role = 'Top Management';
         $addmember->Department = "Host";
         $addmember->save();

        return redirect("/home");
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
        $event = Event::where('Event_id',$id)->first();
        $selection = Member::where('Event_id',$id)
                        ->orwhere('Member_id',auth()->user()->id)->value('Department');

        if($selection == 'Host')
            return view("events/event_details/edit_detail", ["id"=>$id,"event"=>$event]);
        else
            return view("events/event_details/event_detail", ["id"=>$id,"event"=>$event]);
    }
    public function showedit($id)
    {
        $editdetail = Event::where('Event_id',$id)->first();
        return view("events/event_details/edit_detail", ["id"=>$id,"event"=>$editdetail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editevent($id)
    {
        $editdetail = Event::where('Event_id',$id)->first();
        return view("events/event_details/edit_event", ["id"=>$id,"event"=>$editdetail]);
    }
    public function editanouncement($id)
    {
        $editdetail = Event::where('Event_id',$id)->first();
        return view("events/event_details/edit_anouncement", ["id"=>$id,"event"=>$editdetail]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateEvent(Request $request, $id)
    {
        $this->validate($request, [
            'eventName' => 'required',
            'startDate' => 'required',
            'startTime' => 'required',
            'endDate' => 'required',
            'endTime' => 'required',
            'location' => 'required'
        ]);

       // $id = $request->get('id');
        $field = Event::where('Event_id','=',$id)->first();
        $field->Event_name= $request->get('eventName');
        $field->Event_startDate = $request->get('startDate');
        $field->Event_StartTime = $request->get('startTime');
        $field->Event_EndTime = $request->get('endTime');
        $field->Event_EndDate = $request->get('endDate');
        $field->Location = $request->get('location');
        $field->save();

        return redirect("events/event_details/edit_detail/$id");
      
    }

    public function updateAnouncement(Request $request, $id)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

       // $id = $request->get('id');
        $field = Event::where('Event_id','=',$id)->first();
        $field->Announcement= $request->get('body');
        $field->save();

        return redirect("events/event_details/edit_detail/$id");
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventid = Member::where('Event_id',$id)->value('memberid');
        $text = Member::where('memberid',$eventid)->delete();
        return redirect("/home");
       //return view('a', compact('eventid'));
    }
}
