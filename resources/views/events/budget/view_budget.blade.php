<!doctype html>
<html lang="en">
  <head>
    <title>Add New Guest List</title>
    <?php $id=$data['user']->Event_id; ?>
    @extends("layouts.eventsidebar")
    @section("content")
                <!-- col start -->
                <div class="col ">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">Program Name | Budget</h1>
                    
                   
                    <p>Budget List - {{$data['department'][0]->Department}} </p>
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Item</th>
                                <th scope="col">Description</th>
                                <th scope="col">Cost</th>
                                <th scope="col" colspan="2"><div class="text-center">Action</div></th>
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
                
                </div>
                <!-- col end -->
            </div>
        </div>
    </main>
  </body>
</html>
@endsection