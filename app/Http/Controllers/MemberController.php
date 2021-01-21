<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $eventName =  DB::table('events')
                        ->where('Event_id',$id)->value('Event_name');   
        return view('MyEvents/add_member',compact('eventName','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addMember(Request $request)
    {
         $this->validate($request, [
             'email'=>'required',                 
             'role' => 'required',
             'department' => 'required'
         ]);
 
         $id = request('eid');
         $email = request('email');

         $userid = DB::table('users')->where('email',$email)->value('id');

         $addmember = new Member();
         $addmember->Event_id = $id;
         $addmember->Member_id = $userid;
         $addmember->Role = request('role');
         $addmember->Department = request('department');
         $addmember->save();

       return redirect("/MyEvents/manage_team/$id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewteam($id)
    {
        $eventName =  DB::table('events')
                        ->where('Event_id',$id)->value('Event_name');

        $memberList = DB::table('members')
                        ->join('users', 'users.id', '=', 'members.Member_id')
                        ->select('members.*', 'users.*')
                        ->orderby('members.role','desc')
                        ->where('members.Event_id','=',$id)
                        ->get();
        return view('/MyEvents/view_team', compact('eventName','memberList'));
    }

    public function manageteam($id)
    {
        $eventName =  DB::table('events')
                        ->where('Event_id',$id)->value('Event_name');

        $memberList = DB::table('members')
                        ->join('users', 'users.id', '=', 'members.Member_id')
                        ->select('members.*', 'users.*')
                        ->orderby('members.role','desc')
                        ->orderby('members.department','asc')
                        ->where('members.Event_id','=',$id)
                        ->get();
        return view('/MyEvents/manage_team', compact('eventName','memberList','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventid = Member::where('memberid',$id)->value('Event_id');
        $eventName =  DB::table('events')
                        ->where('Event_id',$eventid)->value('Event_name');
        $editmember = DB::table('members')
                        ->join('users', 'users.id', '=', 'members.Member_id')
                        ->select('members.*', 'users.name','users.email')
                        ->where('members.memberid','=',$id)
                        ->first();
       return view('/MyEvents/edit_event',compact('editmember','eventName','eventid'));
      // return view('a',compact('editmember','eventName','eventid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       // return $request->input();
        $this->validate($request, [
            'role' => 'required',
            'department' => 'required'
        ]);
        $eventid = request('eid');
        $mid = request('mid');
        $field = Member::where('memberid','=',$mid)->first();
        $field->Role = $request->get('role');
        $field->Department = $request->get('department');
        $field->save();
        
        return redirect("/MyEvents/manage_team/$eventid");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventid = Member::where('memberid',$id)->value('Event_id');
        $text = Member::where('memberid',$id)->delete();
        return redirect("/MyEvents/manage_team/$eventid");
    }
}
