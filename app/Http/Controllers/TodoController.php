<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Member;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewTask($id,$pid)
    {
        
        $todo = Todo::where('Department',$pid)
                    ->where('status','To do')->get();
        $InProgress = Todo::where('Department',$pid)
                    ->where('status','In Progress')->get();
        $Completed = Todo::where('Department',$pid)
                    ->where('status','Completed')->get();
        $event = Event::where('Event_id',$id)->value('Event_name');
        return view('events/todo_list/todo_list',compact('id','event','pid','todo','InProgress','Completed'));
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
    public function addTodo(Request $request)
    {
        $this->validate($request, [
            'title1'=>'required'
        ]);
        $id= request('hidden11');
        $depart= request('hidden1');
        $addmember = new Todo();
        $addmember->Event_id = $id;
        $addmember->Department = $depart;
        $addmember->Task_name = request('title1');
        $addmember->status = "To do";
        $addmember->comment = "";
        $addmember->description = "";
        $addmember->save();

        return redirect("events/todo_list/todo_list/$id/$depart");
    }
    public function addInProgress(Request $request)
    {
        $this->validate($request, [
            'title2'=>'required'
        ]);
        $id= request('hidden22');
        $depart= request('hidden2');
        $addmember = new Todo();
        $addmember->Event_id = $id;
        $addmember->Department = $depart;
        $addmember->Task_name = request('title2');
        $addmember->status = "In Progress";
        $addmember->comment = "";
        $addmember->description = "";
        $addmember->save();

      return redirect("events/todo_list/todo_list/$id/$depart");
    }
    public function addCompleted(Request $request)
    {
        $this->validate($request, [
            'title3'=>'required'
        ]);
        $id= request('hidden33');
        $depart= request('hidden3');
        $addmember = new Todo();
        $addmember->Event_id = $id;
        $addmember->Department = $depart;
        $addmember->Task_name = request('title3');
        $addmember->status = "Completed";
        $addmember->comment = "";
        $addmember->description = "";
        $addmember->save();

      return redirect("events/todo_list/todo_list/$id/$depart");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Todo::where('Event_id', $id)->get();
        $eventname = Event::where('Event_id',$id)->value('Event_name');
        $list = Member::where('Event_id','=',$id)
                        ->get();
        
        return view('events/todo_list/all_todo_list',compact('list','id','data','eventname'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$pid,$tid)
    {
        $event = Event::where('Event_id',$id)->value('Event_name');
        $edit = Todo::where('Task_id',$tid)->first();
        return view('events/todo_list/view_todo',compact('id','pid','edit','event','tid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$pid,$tid)
    {
              $this->validate($request, [
                'title' => 'required',
                'desc' => 'required',
                'comment' => 'required',
                'status' => 'required'
            ]);

            $field = Todo::where('Task_id','=',$tid)->first();
            $field->Task_name= $request->get('title');
            $field->description= $request->get('desc');
            $field->comment = $request->get('comment');
            $field->status = $request->get('status');
            $field->save();
            
            return redirect("events/todo_list/todo_list/$id/$pid");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$pid,$tid)
    {
        $text = Todo::where('Task_id',$tid)->delete();
        return redirect("events/todo_list/todo_list/$id/$pid");
    }
}
