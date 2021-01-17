<!doctype html>
<html lang="en">
  <head>
    <title>Edit event</title>
  </head>
  @extends("layouts.eventsidebar")
  @section("content")
  <!-- Main Content -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
            <div class="row">
                <!-- side bar start -->
                <div class="col-md-2">
                </div>
                <!-- side bar end -->
                <!-- col start -->
                <br><br>
                <div class="col-md-6">
                <br><br>
                <h2 style="text-align:center;">Anouncement</h2>
                <br><br>
                <div class="container" style="padding:5%;">
                
               
                <div class="form-group">
                    
                    <textarea name='body' id='summary-ckeditor' class="form-control" placeholder='Body'> </textarea>
                </div>
                <br>
                <br>

                <div class="row">
                    <div class="col" style="text-align:center;">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>

                    <div class="col" style="text-align:center;">
                    <button type="submit" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
                </div>
            <!-- col end -->
            </div>
            </div>
            <div class="col-md-2"></div>
        </main>
          
          
  @endsection
</html>