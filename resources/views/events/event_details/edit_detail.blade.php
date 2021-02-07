    @extends("layouts.event" , ["id"=>$id])
    @section("content")
    <!-- Main Content -->
    <div class="col-md-9"> 
        <div class="row" >
                <div class="col-md">
                    <!-- Event title -->
                    <div class="jumbotron jumbotron-fluid" style="opacity: 0.9">
                        <div class="container text-center">
                            <h1 class="display-4"><b>{{$event->Event_name}}</b></h1>
                            <p id="demo" style="text-align: center;font-size: 30px;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md">
                    <!-- event details -->
                    <div class="card text-white bg-info mb-3" style="width: 100%; min-height: 500px;">
                        <div class="card-header" ><b>Event Details</b></div>
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 16px">Event name</h5>
                            <p class="card-text">{{$event->Event_name}}</p>
                            <h5 class="card-title" style="font-size: 16px">Date</h5>
                            <p class="card-text">@if($event->Event_startDate==$event->Event_EndDate)
                                                    {{$event->Event_startDate}}
                                                @else
                                                    {{$event->Event_startDate}} - {{$event->Event_EndDate}}
                                                @endif
                                                </p>
                            <h5 class="card-title" style="font-size: 16px">Time</h5>
                            <p class="card-text">{{$event->Event_StartTime}} - {{$event->Event_EndTime}}</p>
                            <h5 class="card-title" style="font-size: 16px">Venue</h5>
                            <p class="card-text">{{$event->Location}}</p>
                            <div style="text-align: center;">
                                <a href="/events/event_details/edit_event/{{$event->Event_id}}"><button type="button" class="btn btn-primary mt-3" style="width:30%;">Edit</button></a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-sm">
                    <div class="card text-white bg-secondary mb-3" style="width: 100%; min-height: 500px;">
                        <div class="card-header"><b>Anouncement</b></div>
                        <div class="card-body">
                            
                            <p class="card-text" readonly>{!!$event->Announcement!!}</p>
                            <div style="text-align: center;">
                                <a href="/events/event_details/edit_anouncement/{{$event->Event_id}}"><button type="button" class="btn btn-primary mt-3" style="width:30%;">Edit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
 