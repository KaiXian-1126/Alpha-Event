<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use App\Models\Guest;
use App\Models\Event;
use App\Models\User;
use App\Models\send_invitation;
use Illuminate\Support\Facades\DB;


class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data=event::where('Event_id',$id)->first();
        return view('events/invitation/edit_invitation')->with('id',$data);
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
    public function store(Request $request,$id)
    {
        $text=$request->input('text');
        $image=$request->file('image');
        
        $imageName=time().'.'.$image->extension();
        $image->move(public_path('image'),$imageName);

        $invitation=new Invitation();
        $invitation->image=$imageName;
        $invitation->Event_id=$id;
        $invitation->Text=$text;
        $invitation->save();

        

        return redirect("events/invitation/edit_invitation/{$id}")->with('id',$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['id']=invitation::where('Invitation_id',$id)->first();
        $eid=$data['id']->Event_id;
        $data['guest_id']=guest::where('Event_id',$eid)->get();
        $data['event']=event::where('Event_id',$eid)->first();
        $data['user']=user::all();

        
        

        return view("events/invitation/send_invitation")->with(compact('data',$data));
    }

    public function send(Request $request,$id,$iid)
    {
        
        $selection=$request->input('guest');
        $selection1=$request->input('guestList');

        
         $invitation=new send_invitation();
         $invitation->Event_id=$id;
         $invitation->invitation_id=$iid;
         $invitation->Guest_id=$selection;
         $invitation->Guest_list=$selection1;

         $invitation->save();
        
        return redirect("events/invitation/edit_invitation/{$id}")->with('id',$id);
    }

    public function view($id)
    {
        
        $data['iid']=invitation::where('Event_id',$id)->get();
        $data['event']=event::where('Event_id',$id)->first();
        

        return view("events/invitation/invitation_list")->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('/events/invitation/send_invitation')->with('id',$id);
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
