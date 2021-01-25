<!doctype html>
<html lang="en">
  <head>
    <?php  $id=$data['event']->Event_id; ?>
    
    @extends("layouts.eventsidebar")
    @section("content")
                <!-- col start -->
                <div class="col ">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">{{$data['event']->Event_name}} | Budget</h1>
                    <p>Budget List</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Department</th>
                                <th scope="col">Number of Item</th>
                                <th scope="col">Budget Amount</th>
                                
                                <th scope="col" colspan="2"><div class="text-center">Action</div></th>
                                </tr>
                            </thead>
                            
                                <?php 
                                 
                                 
                                 $department=array();
                                foreach($data['budget']  as $key =>$sian)
                                    
                                    
                                if (in_array($sian->Department, $department)==false) {
                                    array_push($department,$sian->Department);
                                    }                                                      
                                  ?>
                                    
                                

                                <?php
                                $number = array_fill(0, count($department)+1, 0);
                                
                                $amount=array_fill(0, count($department)+1, 0);
                                for($count=0;$count<count($department);$count++)  {?>
                                @foreach($data['budget'] as $key =>$value)   
                                    @if($value->Department==$department[$count])     
                                      <?php  
                                       $number[$count]++;
                                       $amount[$count]+=($value->Cost);
                                      ?>    
                                    @endif
                                @endforeach
                                
                                    
                                 <?php } ?>
                                
                            <tbody>
                                <?php 
                                    $totalAmount=0;
                                    for($count=0;$count<count($department);$count++)  { ?>        
                                 <tr>
                                <td>{{$count+1}}</td>
                                <td>{{$department[$count]}}</td>
                                <td>{{$number[$count]}}</td>
                                <td>RM{{$amount[$count]}}</td>
                                
                                   
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-info"><a href="/events/budget/view_budget/{{$department[$count]}}/{{$value->Event_id}}/{{$data['userid']->Member_id}}" class="my-btn-link">View</a></button>
                                    </div>
                                </td>  
                                 
                                </tr>
                                <?php  $totalAmount+=$amount[$count];
                                    } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-success rounded-circle">
                            <a href="/events/budget/add_budget/{{$data['event']->Event_id}}/{{$data['userid']->Department}}" class="my-btn-link">+</a>
                        </button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p>Total Amount: RM {{$totalAmount}}</p>
                    </div>
                </div>
                <!-- col end -->
            </div>
        </div>
    </main>
  </body>
</html>
@endsection