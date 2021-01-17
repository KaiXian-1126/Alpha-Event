<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function getAllEvents(){
        $nowDate = date("Y-m-d");
        $nowTime = date("H:i:s");
        $upcomingEvents = Event::where("Event_EndDate", ">", $nowDate)
        ->orWhere([["Event_EndDate", $nowDate],["Event_EndTime", ">", $nowTime]])->get();
        $pastEvents = Event::where("Event_endDate", "<", $nowDate,)
        ->orWhere([["Event_EndDate", $nowDate],["Event_EndTime", "<", $nowTime]])->get();
        return view('/home', ["upcomingEvents"=>$upcomingEvents, "pastEvents"=>$pastEvents]);
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
        $event = new Event();
        $event->Event_name = request("name");
        $event->Event_startDate = request("start_date");
        $event->Event_endDate = request("end_date");
        $event->Event_StartTime = request("start_time");
        $event->Event_EndTime = request("end_time");
        $event->Location = request("location");
        $event->Announcement = "This is an announcement";
        $event->Description = "This is a description";
        $event->save();
        
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
        return view("events/event_details/event_detail", ["id"=>$id]);
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
