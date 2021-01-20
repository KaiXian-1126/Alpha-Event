<!doctype html>
<html lang="en">
  <head>
    <title>Add New Guest List</title>
    </title>
    @extends("layouts.eventsidebar", ["id"=>$id])
    @section("content")
    <div class="col-md-9">
        <div class="row" >
            <div class="col md-12">
                <h1 class="mb-4 mt-3" style="font-size: 16px">Program Name | Create New Guest List</h1>
                @if(session('message'))    
                    <div class="alert alert-danger alert-dismissible fade-in text-center mt-3">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p class="mb-0">{{ session('message')}}</p>
                    </div>
                @endif
                <form action="/events/guests/create-guest-list" method="post">
                    @csrf
                    <input name="event-id" type="hidden" value="{{$id}}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Guest List Name</span>
                        </div>
                        <input name="guest-list-name" type="text" class="form-control" placeholder="Guest List Name" aria-label="Listname" aria-describedby="basic-addon1" required>
                    </div>
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
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <input type="checkbox" aria-label="Checkbox for following text input" name="id[]" value="{{$guest->id}}">
                                    </div>
                                </td>   
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mr-2">Create List</button>
                        <button type="button" class="btn btn-danger">
                            <a href="/events/guests/guest_list/{{$id}}" class="my-btn-link">Cancel</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @endsection  
</html>
