@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
    <h1>My Events</h1>
</div>
<br>
<div class="row align-self-center">
    <div class="col-md-4 "></div>
    <div class="col-md-4 "><input class="form-control" id="myInput" type="text" placeholder="Search..."></div>
    
</div>
<br>
<div>
    <div class="row d-flex justify-content-end">
        <div class="col-md-3">
             <a href='/MyEvents/create_event'><button type="submit" class="btn btn-primary">Create New Event</button></a>
        </div>
    </div>
</div>
<br>

<div style="text-align:left;">
<h3>Upcoming Events</h3>
</div>
<br>

<div class="row">
<div class="table-responsive" style="margin-bottom: 10%;">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Event Name</th>
            <th scope="col">Event Start Date</th>
            <th scope="col">Event End Date</th>
            <th scope="col">Location</th>
            <th scope="col" >Event Team</th>
            <th scope="col" >View</th>
            <th scope="col" >Delete</th>
            </tr>
        </thead>
        @if(count($upcomingEvents)==0)
            <div class="alert alert-dismissible fade show my-alert" role="alert">
                No upcoming event found.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @else
            <tbody id="myTable">
                @php
                    $counter = 1;
                @endphp
                @foreach($upcomingEvents as $e)   
                <tr>
                
                    <th scope="row">@php echo $counter++ @endphp</th>
                    <td>{{$e->Event_name}}</td></a>
                    <td>{{$e->Event_startDate}}</td>
                    <td>{{$e->Event_EndDate}}</td>
                    <td>{{$e->Location}}</td>
                    
                    @if($e->Department=='Host')
                        <td  scope="row"><a href="/MyEvents/manage_team/{{$e->Event_id}}"><button type="submit" class="btn btn-primary">Manage Team</button></a></td>    
                    @else
                        <td  scope="row"><a href="/MyEvents/view_team/{{$e->Event_id}}"><button type="submit" class="btn btn-primary">View Team</button></a></td>
                    @endif
                    
                    @if ($e->Department=='Host')
                        <td><a href="/events/event_details/edit_detail/{{$e->Event_id}}"><button type="button" class="btn btn-success">View</button></a></td>
                    @else
                        <td><a href="/events/event_details/event_detail/{{$e->Event_id}}"><button type="button" class="btn btn-success">View</button></a></td>
                    @endif   
                    
                    <td><a href="/home/delete_event/{{$e->Event_id}}"><button type="button" class="btn btn-danger">Delete</button></a></td> 
                
                </tr>
            
            @endforeach
            </tbody>
        @endif
    </table>
</div>
</div>

<div style="text-align:left;">
    <h3>Past Events</h3>
</div>
<br>
<div class="row">
    <div class="table-responsive" style="margin-bottom: 5%;">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Event Name</th>
                <th scope="col">Event Start Date</th>
                <th scope="col">Event End Date</th>
                <th scope="col">Location</th>
                <th scope="col" >Event Team</th>
                <th scope="col" >View</th>
                <th scope="col" >Delete</th>
                </tr>
            </thead>
        @if(count($pastEvents) == 0)
            <div class="alert alert-dismissible fade show my-alert" role="alert">
                No past event found.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @else
            <tbody id="myTable">
            @php
                $counter = 1;
            @endphp
            @foreach($pastEvents as $e)   
            <tr>
             
                <th scope="row">@php echo $counter++ @endphp</th>
                <a href="/events/event_details/edit_detail/{{$e->Event_id}}">
                <td>{{$e->Event_name}}</td></a>
                <td>{{$e->Event_startDate}}</td>
                <td>{{$e->Event_EndDate}}</td>
                <td>{{$e->Location}}</td>
                <td  scope="row"><a href="/MyEvents/view_team/{{$e->Event_id}}"><button type="submit" class="btn btn-primary">Manage Team</button></a></td>
                <td><a href="/events/event_details/event_detail/{{$e->Event_id}}"><button type="button" class="btn btn-success">View</button> </a></td>   
                <td> <a href="/home/delete_event/{{$e->Event_id}}"><button type="button" class="btn btn-danger">Delete</button></a>
            
            </tr>
        
            @endforeach
            </tbody>
        @endif
        </table>
    </div>
    </div>
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>
</div>
@endsection

