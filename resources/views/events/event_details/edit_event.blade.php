<!doctype html>
<html lang="en">
  <head>
    <title>Edit event</title>
  </head>
  @extends("layouts.eventsidebar", ["id"=>$id])
  @section("content")
  <!-- Main Content -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
    <div class="row text-center" >
                <!-- col start -->
                <br><br>
                <div class="col-md-2"></div>
                <div class="col-md-8">
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
            <div class="col-md-2"></div>
          </main>
            
            
    @endsection
</html>