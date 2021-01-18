<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\budget;
// use App\Models\user;
use App\Models\member;
use App\Models\event;
use Illuminate\Support\Facades\DB;
use Auth;
use Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data['budget']=budget::where('Event_id', $id)->get();

        $data['event']=event::where('Event_id',$id)->first();

        $user = Auth::user();

        $data['userid']=member::where('Member_id',$user->id)->first();


        return view('events/budget/budget_list')->with(compact('data',$data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($eid,$id)
    {
        
        $data['userid']=member::where('Department',$id)->first();

        $data['eventid']=$eid;

        

        
        return view('/events/budget/add_budget')->with('member',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($eid,$department,$uid)
    {
        $input = Request::all();
        
        $data=new budget;
        $data->Event_id = $eid;
        $data->Department  = $department;
        $data->Budget_name=$input['item'];
        $data->Description=$input['description'];
        $data->Cost=$input['cost'];
        $data->save();

        $de =  budget::where('Department', $department)->get();
        

        return redirect("events/budget/view_budget/{$department}/{$eid}/{$uid}")->with('data',$de);
    }

    public function store_update($id,$uid)
    {
       
        
        $input = Request::all();
        
        $data=budget::where('Budget_id', $id)->first();
        $data->Budget_name=$input['item'];
        $data->Description=$input['description'];
        $data->Cost=$input['cost'];
        $data->save();

        $de =  budget::where('Department', $data->Department)->get();
        
    
        return redirect("events/budget/view_budget/{$data->Department}/{$data->Event_id}/{$uid}")->with('data',$de);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$eid,$uid)
    {   
        // $data = budget::select('select * from budget where Department="$id"');
        $data['department'] =  budget::where('Department', $id)->get();
        
        $data['user'] =member::where('Event_id',$eid)->first();
        
        $data['userid']=member::where('Member_id',$uid)->first();

        
        return view('events/budget/view_budget')->with(compact('data',$data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data =budget::find($id);
        // $budget = budget::select('select * from budget where Budget_id=1');
        // $budget =  budget::where('Budget_id', $id)->first();
        
        $budget=budget::find($id);
        
        return view('events.budget.edit_budget')->with('data',$budget);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,$uid)
    {   
        
        $data['data']=budget::find($id);
        
        
        $data['alldata']=budget::where('Department',$data['data']->Department)->get();

        $data['userid']=member::where('Member_id',$uid)->first();

        return view('events/budget/edit_budget')->with(compact('data',$data));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uid,$id)
    {
        $data=budget::find($id);
        $data->delete();
        
        return redirect("events/budget/view_budget/{$data->Department}/{$data->Event_id}/{$uid}");
    }
}
