<!doctype html>
<html lang="en">
  <head>
    <title>Guest List</title>
  </head>
    @extends("layouts.eventsidebar", ["id" => $event->Event_id])
    @section("content")
    <div class="col-md-9">
        <div class="row">        
        <!-- col start -->
            <div class="col">
                <h1 class="mb-4 mt-3" style="font-size: 16px">{{$event->Event_name}} | Guest List</h1>
                
                    <form class="form-inline d-flex mb-4">
                        <div class="col-md-4 "><input class="form-control" id="myInput" type="text" placeholder="Search.."></div>
                    </form>
                    <div class="row mt-2 mb-2">
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-info"><a class="my-btn-link" href="/events/guests/add_guest_list/{{$event->Event_id}}">Add Guest List</a></button>
                        </div>
                    </div>
                
            
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Guest List</th>
                            <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody id="myTable">
                        @php
                            $counter = 1;
                        @endphp
                        @foreach($guestList as $list)
                            <tr>
                            <th scope="row">@php echo $counter++ @endphp</th>
                            <td>{{$list->Guest_list}}</td>
                            <td colspan="2">
                                <button type="button" class="btn btn-primary">
                                    <a href="/events/guests/edit_guest_list/{{$event->Event_id}}/{{$list->Guest_list}}" class="my-btn-link">Edit</a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <a href="/events/guests/delete-guest-list/{{$event->Event_id}}/{{$list->Guest_list}}" class="my-btn-link">Delete</a>
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
  
