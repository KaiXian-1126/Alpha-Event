<!doctype html>
<html lang="en">

<head>
    <title>Edit event</title>
</head>
@extends("layouts.eventsidebar",  ["id"=>$data['event']->Event_id])
@section("content")

<!-- Main Content -->
    

    <div class="container" style="text-align:center;">
        <div class="row">
            <!-- col start -->
            
            <div class="col-sm-9" >
                @if(empty($data['iid']))
                <div class="container" style="text-align: center;margin-top:30%">
                    <h1>You haven't create the card yet</h1>

                    <button type="button" class="btn btn-primary"><a href="/events/invitation/edit_invitation/{{$data['event']->Event_id}}" style="color:white;">Back</a></button>
                </div>
                
                <br><br>

                @else
                <div class="table-responsive" style="margin-top:20%;">
                    <h2>{{$data['event']->Event_name}}</h2>
                    <br><br>
               
                    <button type="button" class="btn btn-primary"><a href="/events/invitation/edit_invitation/{{$data['iid'][0]->Event_id}}" style="color:white;">Back</a></button>
                    <br><br>
                <table class="table">
                    <tr style="background-color: rgb(188, 233, 188);">
                    
                        <th><h3 style="text-decoration:underline;color:rgb(1, 63, 1)">Card List</h3></th>
                
                    </tr>
                        @foreach($data['iid'] as $key =>$id)
                    <tr style="background-color: rgb(238, 245, 238);">
                        <td>
                            <a href="/go-to-card-send/{{$id->Invitation_id}}"><h3>Invitation card {{$key+1}}</h3></a>
                         </td>
                    </tr>
                    @endforeach
                </table>
            </div>
                @endif
               
                
                
            </div>

        </div>
                
    </div>
           
        
        <!-- col end -->
            
        
    


@endsection

</html>


