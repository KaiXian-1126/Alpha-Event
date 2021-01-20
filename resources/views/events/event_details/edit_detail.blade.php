<!doctype html>
<html lang="en">
  <head>
    <title>Event detail</title>
    <script>
        
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 31, 2021 15:37:25");
        var countDownDate = 
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

         <style>
            h1{
                text-align: center;
            }
            h2{
                text-decoration:underline;
                text-align:center;
                margin-bottom:100%;
            }

        </style>
    </head>

    @extends("layouts.eventsidebar" , ["id"=>$id])
    @section("content")
    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
        
            <div class="row text-center" >
            <div class="row" >
                <!-- side bar start -->
                <div class="col-md-2">
                    
                </div>
                <!-- side bar end -->
                <!-- col start -->
                <br><br>
                <div class="col-md-8" style="margin-top:5%;margin-bottom:8%;">
                    <div class="container" style="margin-bottom:5%; border:1px solid black;">
                        <h1>{{$event->Event_name}}</h1>
                        <p id="demo" style="text-align: center;font-size: 30px;"></p>
                        </div>
                        
                        <div class="row ">
                                
                            <div class="col-sm-5" style="margin-bottom:5%;">
                              <div class="container" style="margin-bottom:5%;">
                                <h2>Event Detail</h2>
                                <br>
                                <br>
                                <div class="row">
                                   <div class="col-5">
                                       <p>Event name</p>
                                   </div>
                        
                                   <div class="col-1">
                                    <p>:</p>
                                   </div>
                        
                                   <div class="col-5">
                                    <p>{{$event->Event_name}}</p>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <p>Date</p>
                                    </div>
                         
                                    <div class="col-1">
                                     <p>:</p>
                                    </div>
                         
                                    <div class="col-5">
                                        @if($event->Event_startDate==$event->Event_EndDate)
                                            <p>{{$event->Event_startDate}}</p>
                                        @else
                                            <p>{{$event->Event_startDate}} - {{$event->Event_EndDate}}</p>
                                        @endif
                                    </div>
                                 </div>
                                <div class="row">
                                    <div class="col-5">
                                        <p>Time</p>
                                    </div>
                         
                                    <div class="col-1">
                                     <p>:</p>
                                    </div>
                         
                                    <div class="col-5">
                                     <p>{{$event->Event_StartTime}} - {{$event->Event_EndTime}}</p>
                                    </div>
                                 </div>
                        
                                 <div class="row">
                                    <div class="col-5">
                                        <p>Venue</p>
                                    </div>
                         
                                    <div class="col-1">
                                     <p>:</p>
                                    </div>
                         
                                    <div class="col-5">
                                     <p>{{$event->Location}}</p>
                                    </div>
                                 </div>

                                 <br>
                                    <div style="text-align: center;">
                                    <a href="/events/event_details/edit_event/{{$event->Event_id}}"><button type="button" class="btn btn-primary mt-3" style="width:30%;">Edit</button></a>
                                    </div>
                                <br>
                        
                                 </div>
                            </div>

                            <div class="col-sm-1">
                            </div>
                          
                            <div class="col-sm-6" style="margin-bottom:30%;">
                                <div class="container" style="border:1px solid black;margin-bottom:10%;">
                                    <h2>Anouncement</h2>
                                    <br>
                                    <textarea style="width:100%; height:100%; margin-bottom:5%;" readonly>{{$event->Announcement}}</textarea>

                                    <br>
                                    <div style="text-align: center;">
                                        <a href="/events/event_details/edit_anouncement/{{$event->Event_id}}"><button type="button" class="btn btn-primary mt-3" style="width:30%;">Edit</button></a>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </main>
            
            
            @endsection
        </html>