<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use App\Models\Guest;
use App\Models\Event;
use App\Models\User;
use App\Models\Challenge;
use Illuminate\Support\Facades\Http;
use App\Models\send_invitation;
use Auth;
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
        $invitation_card=Invitation::where('Event_id',$id)->get();
        $user = Auth::user();
        $validation = false;
        if(sizeof($invitation_card) >= $user->invitation_card_amount ){
            $validation = true;
                //->with("message", "Please go to <a href=''><b>Reward Page</b></a> to add enable more cards design.");
        }
        $event=event::where('Event_id',$id)->first();
        //->with(compact('$data',$data))
        return view('events/invitation/edit_invitation', ['validation' => $validation, 'event'=>$event]);
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
        
        $user = Auth::user();
        $user->invitation_count++;
        $user->save();

        $challenge = Challenge::where('user_email', $user->email)->first();
        $challenge->invitation_count++;
        if($challenge->invitation_count >= 30 && !$challenge->invitation_achieved){
            Http::post('api.tenenet.net/insertPlayerActivity?token=79ee4fb9f158e60ba55674ecb8ed249a&alias='.$user->email.'&id=alpha_badge_point&operator=add&value=50');
            Http::post('api.tenenet.net/insertPlayerActivity?token=79ee4fb9f158e60ba55674ecb8ed249a&alias='.$user->email.'&id=alpha_reward&operator=add&value=50');  
            $challenge->invitation_achieved = true;
        }
        $challenge->save();
        return redirect("events/invitation/edit_invitation/{$id}")->with('id',$id);
    }

    public function view($id)
    {
        
        $data['iid']=invitation::where('Event_id',$id)->get();
        $data['event']=event::where('Event_id',$id)->first();
        

        return view("events/invitation/invitation_list")->with('data',$data);
    }

    public function view_invitation()
    {
        
        
        $user=Auth::user();

        

        $data['guest']=guest::where('Guest_id',$user->id)->get();
        $data['invitation']=send_invitation::all();
        $data['event']=event::all();

       

        return view("events/invitation/view_invitation")->with('data',$data);
    }

    public function view_invitation_description($id)
    {
        $data['id']=invitation::where('Invitation_id',$id)->first();
        
        return view("events/invitation/view_invitation_description")->with(compact('data',$data));;
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
