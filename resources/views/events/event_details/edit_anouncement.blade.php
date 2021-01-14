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
                </main>
              </body>
            </html>
            @endsection