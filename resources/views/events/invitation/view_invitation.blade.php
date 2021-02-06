@extends('layouts.dashboard')

@section('content')
<div class="col">
<div class="container">
    <h2>Invitation List</h2>
    <br>
    <div>
        <p style="text-align:right;">
        <button type="button" class="btn btn-primary" ><a href="/home" style="color:white;">Back</a></button></p>
    </div>
    @if(count($data['invitation']) == 0)
        <div class="alert alert-dismissible fade show my-alert" role="alert">
            No invitation found.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @else    
        <div class="table-responsive">
        <table class="table table-hover table-dark" style="text-align:center;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Start at</th>
                    <th scope="col">End at</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <?php $counter=1; ?>
                    @foreach($data['invitation'] as $key1 =>$invitation)
                
                    @foreach($data['guest'] as $key =>$guest)
                        @if($invitation->Guest_id ==$guest->Guest_id && $invitation->Event_id ==$guest->Event_id)
                <tr>
                    
                    <td>{{$counter}}</td>
                    
                        @foreach($data['event'] as $key3 =>$event)
                            @if($guest->Event_id==$event->Event_id)
                            <td>{{$event->Event_name}}</td>
                            @endif
                        @endforeach
                
                    <td>{{$event->Location}}</td>
                    <td>{{$event->Event_startDate}}/ {{$event->Event_StartTime}}</td>
                    <td>{{$event->Event_EndDate}}/ {{$event->Event_EndTime}}</td>
                    <td><button type="button" class="btn btn-primary"><a href="/invitation/view_invitation_description/{{$invitation->invitation_id}}" style="color:white;">View</a></button></td>
                    <?php $counter++; ?>
                </tr>

                    @elseif($invitation->Guest_list ==$guest->Guest_list && $invitation->Event_id ==$guest->Event_id)
                <tr>
                    <td>{{$counter}}</td>
                    @foreach($data['event'] as $key3 =>$event)
                    @if($guest->Event_id==$event->Event_id)
                    <td>{{$event->Event_name}}</td>
                            @endif
                        @endforeach
                
                    <td>{{$event->Location}}</td>
                    <td>{{$event->Event_startDate}}/ {{$event->Event_StartTime}}</td>
                    <td>{{$event->Event_EndDate}}/ {{$event->Event_EndTime}}</td>
                    <td><button type="button" class="btn btn-primary"><a href="/invitation/view_invitation_description/{{$invitation->invitation_id}}" style="color:white;">View</a></button></td>
                    <?php $counter++; ?>
                </tr>
                @endif
                @endforeach
                    @endforeach
        
            </tbody>
        </table>
    </div>
    @endif
</div>
</div>

@endsection

