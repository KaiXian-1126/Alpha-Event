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
                    
                        <form class="form-inline d-flex mb-4 justify-content-end">
                            <input class="form-control mr-sm-2" type="search" placeholder="Enter Title" aria-label="Search">
                            <button type="button" class="btn btn-info">Add Card</button>
                        </form>
                    <h2 class="mb-4 mt-3" style="font-size: 14px">Department Name</h2>         
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 d-flex justify-content-center">
                                <div class="card" style="width: 90%;">
                                    <div class="card-header" style="background-color: #B7E6A9">
                                        <p>To Do</p>
                                        <div class="row">
                                            <div class="d-flex">
                                                <input class="form-control"  type="search" placeholder="Enter Title" aria-label="Search">
                                                <button type="button" class="btn btn-info">Add Card</button>
                                            </div>
                                        </div>                                 
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex justify-content-center">
                                <div class="card" style="width: 90%;">
                                    <div class="card-header" style="background-color: #B7E6A9">
                                        <p>In Progress</p>
                                        <div class="d-flex">
                                            <input class="form-control"  type="search" placeholder="Enter Title" aria-label="Search">
                                            <button type="button" class="btn btn-info">Add Card</button>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                    </div>
                                </div>
                            <div class="col-lg-4 d-flex justify-content-center">
                                <div class="card" style="width: 90%;">
                                    <div class="card-header" style="background-color: #B7E6A9">
                                        <p>Completed</p>
                                        <div class="d-flex">
                                            <input class="form-control"  type="search" placeholder="Enter Title" aria-label="Search">
                                            <button type="button" class="btn btn-info">Add Card</button>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                    </div>
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