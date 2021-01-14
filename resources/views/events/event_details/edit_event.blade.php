<!doctype html>
<html lang="en">
  <head>
    <title>Edit event</title>
  </head>
    @extends("layouts.navigation_bar")
    @section("content")
    <!-- Main Content -->
    <main>
        <div class="container-fluid">
            <div class="row">
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
                <div class="col-md-5">
                    <h2 style="text-align: center; text-decoration:underline;margin-top:5%;margin-bottom:5%;">Edit event</h2>

                  <div class="container-md" style="padding:5%;">
                    <div style="margin:auto;">
                    <form>
                      
                
                    
                  <div>
                    <label for="eventName" class="form-label">Event name</label>
                    <input type="text" class="form-control" id="eventName" placeholder="Enter event name" name="eventName" >
                  </div>
                  
              

                <br><br>

                <div class="row ">
                    
                    <div class="col-sm-6" style="margin-bottom:5%;">
                      <label for="startDate" class="form-label">Start date</label>
                      <input type="date" class="form-control" id="startDate" placeholder="Enter start date" name="startDate">
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
                  
                    <div class="col-sm-6" >
                      <label for="startTime" class="form-label">Start time</label>
                      <input type="time" class="form-control" id="startTime" placeholder="Enter start time" name="startDate">
                    </div>
                </div>

                <br>


                <div class="row">
                    
                    <div class="col-sm-6" style="margin-bottom:5%;">
                      <label for="endDate" class="form-label">End date</label>
                      <input type="date" class="form-control" id="endDate" placeholder="Enter end date" name="endDate">
                    </div>
                    <div class="col-sm-6">
                      <label for="endTime" class="form-label">End time</label>
                      <input type="time" class="form-control"id="endTime" placeholder="Enter end time" name="endTime">
                    </div>
                </div>

                <br>

                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" placeholder="Enter location" name="location" >

                <br><br>

                <label for="tentative" class="form-label">Tentative</label>
                <input type="file" class="form-control" id="tentative"  name="tentative" >

                <br><br>
                <div style="text-align: center;">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
              </form>
              <div>
            </div>
            </div>
            <!-- col end -->
            </div>
            </div>
                </main>
              </body>
            </html>
            @endsection