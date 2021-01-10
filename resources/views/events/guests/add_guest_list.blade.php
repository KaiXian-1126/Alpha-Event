<!doctype html>
<html lang="en">
  <head>
    <title>Add New Guest List</title>
    @extends("layouts.navigation_bar")
    @section('content')
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
                            <li class="list-group-item"><a href="#">To-do List</a></li>
                            <li class="list-group-item"><a href="#">Budget</a></li>
                            <li class="list-group-item"><a href="#">Invitation</a></li>
                            <li class="list-group-item"><a href="#">Publish</a></li>
                        </ul>
                    </div>
                </div>
                <!-- side bar end -->
                <!-- col start -->
                <div class="col ">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">Program Name | Create New Guest List</h1>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Guest List Name</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Guest List Name" aria-label="Listname" aria-describedby="basic-addon1">
                        </div>
                    <p>Guest List</p>
                    <form class="form-inline d-flex mb-4">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Guest" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone No</th>
                                <th scope="col"><div class="text-center">Add</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td><div class="d-flex justify-content-center"><input type="checkbox" aria-label="Checkbox for following text input"></div></td>   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary mr-2">Create List</button><button type="button" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
                <!-- col end -->
            </div>
        </div>
    </main>
  </body>
</html>
@endsection