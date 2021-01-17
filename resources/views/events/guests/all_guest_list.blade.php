<!doctype html>
<html lang="en">
  <head>
    <title>All Guests</title>
  </head>
    @extends("layouts.eventsidebar", ["id"=>$id])
    @section("content")
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
                <!-- col start -->
                <div class="row " >
                <div class="col-md-12">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">Program Name | Guest Information</h1>
                    
                        <form class="form-inline d-flex mb-4">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search Guest" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button type="button" class="btn btn-info"><a class="my-btn-link" href="/events/guests/add_guest/{{$id}}">Add Guest</a></button>
                            </div>
                        </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach($guests as $guest)
                                <tr>
                                <th scope="row">@php echo $counter++ @endphp</th>
                                <td>{{ $guest->name}}</td>
                                <td>{{ $guest->email}}</td>
                                <td>{{ $guest->phone}}</td>
                                <td><button type="button" class="btn btn-danger">
                                        <a class="my-btn-link" href="/events/guests/delete_guest/1/{{$guest->id}}">Delete</a>
                                    </button>
                                </td>   
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- col end -->
            </div>
    </main>

@endsection
</html>