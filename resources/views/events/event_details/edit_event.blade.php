<!doctype html>
<html lang="en">
  <head>
    <title>Edit event</title>
  </head>
  @extends("layouts.eventsidebar", ["id"=>$id])
  @section("content")
  <!-- Main Content -->
  <div class="col-md-9"> 
    <div class="row text-center" >
                <!-- col start -->
                <br><br>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2 style="text-align: center; text-decoration:underline;margin-top:5%;margin-bottom:5%;">Edit event</h2>

                  <div class="container-md" style="padding:5%;">
                    <div style="margin:auto;">
              <form action="/events/event_details/event-update/{{$event->Event_id}}" method="POST">    
                @csrf     
                  <div>
                    <label for="eventName" class="form-label">Event name</label>
                    <input type="text" class="form-control" id="eventName" value="{{$event->Event_name}}" name="eventName" >
                  </div>

                <br><br>

                <div class="row ">
                    
                    <div class="col-sm-6" style="margin-bottom:5%;">
                      <label for="startDate" class="form-label">Start date</label>
                      <input type="date" class="form-control" id="startDate" value="{{$event->Event_startDate}}" name="startDate">
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
                  
                    <div class="col-sm-6" >
                      <label for="startTime" class="form-label">Start time</label>
                      <input type="time" class="form-control" id="startTime" value="{{$event->Event_StartTime}}" name="startTime">
                    </div>
                </div>

                <br>


                <div class="row">
                    
                    <div class="col-sm-6" style="margin-bottom:5%;">
                      <label for="endDate" class="form-label">End date</label>
                      <input type="date" class="form-control" id="endDate" value="{{$event->Event_EndDate}}" name="endDate">
                    </div>
                    <div class="col-sm-6">
                      <label for="endTime" class="form-label">End time</label>
                      <input type="time" class="form-control"id="endTime" value="{{$event->Event_EndTime}}" name="endTime">
                    </div>
                </div>

                <br>

                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" value="{{$event->Location}}" name="location" >
                <input type="hidden" name="id" id="id" value="{{$event->Event_id}}">
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