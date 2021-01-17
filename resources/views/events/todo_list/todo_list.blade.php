<!doctype html>
<html lang="en">
  <head>
    <title>Guest List</title>
    </head>
    @extends("layouts.eventsidebar", ["id"=>$id])
    @section("content")
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
                <!-- col start -->
                <div class="row " >
                <div class="col-md-12">
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
                                        <li class="list-group-item">
                                            Cras justo odio 
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </li>
                                        <li class="list-group-item">
                                            Cras justo odio 
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </li>
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
                                        <li class="list-group-item">
                                            Cras justo odio 
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </li>
                                        <li class="list-group-item">
                                            Cras justo odio 
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </li>
                                        
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
                                        <li class="list-group-item">
                                            Cras justo odio 
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </li>
                                        <li class="list-group-item">
                                            Cras justo odio 
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->

    </main>
    @endsection  
</html>
