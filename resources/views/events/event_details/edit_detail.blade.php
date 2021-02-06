<!doctype html>
<html lang="en">
  <head>
      <!-- 
    <script>
        
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 31, 2021 15:37:25");
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
        </script>
    -->
    </head>

    @extends("layouts.eventsidebar" , ["id"=>$id])
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
            </main>
            
            
            @endsection
        </html>