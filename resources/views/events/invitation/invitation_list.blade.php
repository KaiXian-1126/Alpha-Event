@extends("layouts.event",  ["id"=>$data['event']->Event_id])
@section("content")

<!-- Main Content -->
    <div class="col-md-9"> 
        <div class="container" style="text-align:center;margin-bottom:10%;">
            <div class="row">
                <!-- col start -->
                <div class="col-sm-12" >
                    @if(empty($data['iid'][0]))
                    <div class="container" style="text-align: center;margin-top:30%">
                        <h1>You haven't create the card yet</h1>
                        <button type="button" class="btn btn-primary"><a href="/events/invitation/edit_invitation/{{$data['event']->Event_id}}" style="color:white;">Back</a></button>
                    </div>             
                    <br><br>
                    @else
                    <div class="table-responsive mt-3">
                        <br><br>
                        <h1>{{$data['event']->Event_name}}</h1>
                        <br><br>
                        <div style="text-align: right;">
                        <button type="button" class="btn btn-primary" ><a href="/events/invitation/edit_invitation/{{$data['iid'][0]->Event_id}}" style="color:white;">Back</a></button>
                        <br><br>
                        </div>
                        <table class="table" style="text-align: center;">
                            <tr style="background-color:rgb(160, 227, 236,0.7);">
                            
                                <th><h3 style="text-decoration:underline;color:rgba(43, 45, 155, 0.8)">Card List</h3></th>
                        
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
                 <!-- col end -->
            </div>       
        </div>
    </div>
 
@endsection




