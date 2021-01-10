<!doctype html>
<html lang="en">
  <head>
    <title>Guest List</title>
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
                <div class="col">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">Program Name | To-do List</h1>
                    <h2 class="mb-4 mt-3" style="font-size: 14px">Department Name | To-do</h2>
                    <div class="row mb-3 mr-2">         
                        <div class="input-group">
                            <div class="col-md-3 input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="width: 100%">Title</span>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 mr-2">
                        <div class="input-group">
                            <div class="col-md-3 input-group-prepend">
                                <span class="input-group-text" style="width: 100%">Description</span>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 mr-2">
                        <div class="input-group">
                            <div class="col-md-3 input-group-prepend">
                                <span class="input-group-text"  style="width: 100%">Comment</span>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-10 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary mr-2">Update</button>
                        <button type="button" class="btn btn-danger mr-2">Cancel</button>
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