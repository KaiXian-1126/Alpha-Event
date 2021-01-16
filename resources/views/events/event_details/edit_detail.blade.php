<!doctype html>
<html lang="en">
  <head>
    <title>Event detail</title>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 13, 2021 15:37:25").getTime();
        
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

        
            .container{
                border:1px solid black;

            }       

            h2{
                text-decoration:underline;
                text-align:center;
                margin-bottom:100%;
            }

        </style>
    </head>

    @extends("layouts.navigation_bar")
    @section("content")
    <!-- Main Content -->
    <main>
        <div class="container-fluid">
            <div class="row" >
                <!-- side bar start -->
                <div class="col-md-3">
                    <div class="card" style="width: 14rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">Event</a></li>
                            <li class="list-group-item">
                                <div id="accordion">       
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Guests
                                    </button>
                                </h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <a href="#">All Guests
                                    </button>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div id="accordion">       
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    To-do List
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <a href="#">Department Name</a>
                                    </button>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item"><a href="#">Budget</a></li>
                            <li class="list-group-item"><a href="#">Invitation</a></li>
                            <li class="list-group-item"><a href="#">Publish</a></li>
                        </ul>
                    </div>
                </div>
                <!-- side bar end -->
                <!-- col start -->
                <br><br>
                <div class="col-md-8" style="margin-top:5%;margin-bottom:8%;">
                    <div class="container" style="margin-bottom:5%;">
                        <h1>Cultural Event</h1>
                        <p id="demo" style="text-align: center;font-size: 30px;"></p>
                        </div>
                        
                        <div class="row ">
                                
                            <div class="col-sm-5" style="margin-bottom:5%;">
                              <div class="container">
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
                                    <p>Event 1</p>
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
                                     <p>08:00 p.m.</p>
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
                                     <p>Dewan Sultan Iskandar, UTM Johor</p>
                                    </div>
                                 </div>
                        
                                 <div class="row">
                                    <div class="col-5">
                                        <p>Tentative</p>
                                    </div>
                         
                                    <div class="col-1">
                                     <p>:</p>
                                    </div>
                         
                                    <div class="col-5">
                                     <p>tentative.pdf</p>
                                    </div>
                                 </div>

                                 <br>
                                    <div style="text-align: center;">
                                    <button type="submit" class="btn btn-primary mt-3" style="width:30%;">Edit</button>
                                    </div>
                                <br>
                        
                                 </div>
                            </div>

                            <div class="col-sm-1">
                            </div>
                          
                            <div class="col-sm-6" style="margin-bottom:30%;">
                                <div class="container" style="margin-bottom:10%;">
                                    <h2>Anouncement</h2>
                                    <br>
                                    <textarea style="width:100%; height:50%; margin-bottom:5%;" readonly></textarea>
                                    <textarea style="width:100%; height:20%; margin-bottom:2%;" readonly></textarea>
                                    
                                    <br>
                                    <div style="text-align: center;">
                                        <button type="submit" class="btn btn-primary mt-3" style="width:30%;">Edit</button>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            
                        </div>
                </div>
                </main>
              </body>
            </html>
            @endsection