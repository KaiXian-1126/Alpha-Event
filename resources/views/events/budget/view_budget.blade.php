<!doctype html>
<html lang="en">
  <head>
    <title>Add New Guest List</title>
    <?php $id=$data['user']->Event_id; ?>
    @extends("layouts.eventsidebar")
    @section("content")
                <!-- col start -->
                <div class="col ">
                    
                    
                    @if(empty($data['department'][0]))
                    <div class="container" style="margin-top:20%;text-align:center;">
                    <h3>Please create at least one budget and try again</h1>
                    <br><br>
                    <p><button type="button" class="btn btn-primary"><a href="/events/budget/budget_list/{{$data['user']->Event_id}}" class="my-btn-link">Back</a></button></p>
                    </div>
                    @else
                    <br><br>
                    <p>Budget List - {{$data['department'][0]->Department}} </p>
                    <div class="table-responsive">
                        <table class="table" style="text-align: center;">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Item</th>
                                <th scope="col">Description</th>
                                <th scope="col">Cost</th>
                                @if($data['userid']->Department==$data['department'][0]->Department)
                                <th scope="col" colspan="2"><div class="text-center">Action</div></th>
                                @endif
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $sum = 0; $index=0; ?>
                                @foreach($data['department'] as $key =>$value)
                                    @if($value->Event_id==$data['user']->Event_id)
                                <tr>
                                <th scope="row">{{$index+1}}</th>
                                <td>{{$value->Budget_name}}</td>
                                <td>{{$value->Description}}</td>
                                <td>RM{{$value->Cost}}</td>
                                @if($data['userid']->Department==$data['department'][0]->Department)
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary"><a href="/events/budget/edit_budget/{{$value->Budget_id}}/{{$data['userid']->Member_id}}" class="my-btn-link">Edit</a></button>
                                    </div>
                                </td>  
                                
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-danger"><a href="/delete_budget/{{$data['userid']->Member_id}}/{{$value->Budget_id}}" class="my-btn-link">Delete</a></button>
                                    </div>
                                </td> 
                                @endif 
                                </tr>
                                <?php $sum+= $value->Cost; $index++; ?>
                                    @endif
                                @endforeach

                                
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p>Total Amount: RM{{$sum}}</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary">
                            <a href="/events/budget/budget_list/{{$data['user']->Event_id}}" class="my-btn-link">Back</a>
                        </button>
                    </div>

                    @endif
                
                </div>
                <!-- col end -->
            </div>
        </div>
    </main>
  </body>
</html>
@endsection