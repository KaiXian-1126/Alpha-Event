@extends("layouts.eventsidebar", ["id"=>$id])
@section("content")
    <div class="col-md-9">
                <!-- col start -->
                <div class="row " >
                <div class="col-md-12">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">{{$eventname}} | Guest Information</h1>
                    
                        <form class="form-inline d-flex mb-4">
                            <div class="col-md-4 "><input class="form-control" id="myInput" type="text" placeholder="Search.."></div>
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
                            <tbody id="myTable">
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
                                        <a class="my-btn-link" href="/events/guests/delete_guest/{{$id}}/{{$guest->id}}">Delete</a>
                                    </button>
                                </td>   
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- col end-->
    </main>
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
    </script>
@endsection
