<!doctype html>
<html lang="en">
  <head>
    <title>Add New Guest List</title>
    </title>
    @extends("layouts.eventsidebar", ["id"=>'$id'])
    @section("content")
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
        <div class="row " >
                    <!-- col start -->
                <div class="col md-12">
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
                    <form action="" method="post">
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
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach($guests as $guest)
                                    <tr>
                                    <th scope="row">@php echo $counter @endphp</th>
                                    <td>{{$guest->name}}</td>
                                    <td>{{$guest->email}}</td>
                                    <td>{{$guest->phone}}</td>
                                    <td><div class="d-flex justify-content-center">
                                            <input type="checkbox" aria-label="Checkbox for following text input" name="id" value="{{$guest->id}}">
                                        </div>
                                    </td>   
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary mr-2">Create List</button>
                            <button type="button" class="btn btn-danger">
                                <a href="/events/guests/guest_list" class="my-btn-link">Cancel</a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- col end -->
            </div>
        </div>
    </main>
    @endsection  
</html>
