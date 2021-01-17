<!doctype html>
<html lang="en">
  <head>
    <title>Guest List</title>
  </head>
    @extends("layouts.eventsidebar")
    @section("content")
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
        <div class="row">        
        <!-- col start -->
                <div class="col">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">Program Name | Guest List</h1>
                    
                        <form class="form-inline d-flex mb-4">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search Guest List" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <div class="row mt-2 mb-2">
                            <div class="col d-flex justify-content-end">
                                <button type="button" class="btn btn-info"><a class="my-btn-link" href="/events/guests/add_guest_list">Add Guest List</a></button>
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
                          
                            <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach($guestList as $list)
                                <tr>
                                <th scope="row">@php echo $counter @endphp</th>
                                <td>{{$list->Guest_list}}</td>
                                <td colspan="2">
                                    <button type="button" class="btn btn-primary"><a href="#" class="my-btn-link">Edit</a></button>
                                    <button type="button" class="btn btn-danger"><a href="#" class="my-btn-link">Delete</a></button></td>   
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- col end -->
            </div>
      
    </main>
  </body>
  @endsection
  </html>
