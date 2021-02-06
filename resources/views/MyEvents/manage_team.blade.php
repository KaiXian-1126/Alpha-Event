@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="eventheader">
            <h3 class="mt-4 mb-2">{{$eventName}}
            <span class="verticalline"></span>
            Event member</h3>
        </div>
        
        <!-- table start -->
        <div class="col"> 
            <div class="row mt-5">
                <h5>Event Member List</h5>
            </div>           
            <div class="table-responsive">
                <table class="table table-dark table-hover mt-4" style="text-align: center">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Role</th>
                        <th scope="col">Department</th>
                        <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($memberList as $indexKey=>$row)
                        <tr>
                            <th scope="row">{{ $indexKey+1 }}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->phone}}</td>
                            <td>{{$row->Role}}</td>
                            <td>{{$row->Department}}</td>
                            @if ($row->Department!='Host')
                            <td><a href="/MyEvents/edit_member/{{$row->memberid}}"><button type="button" class="btn btn-primary mybutton">Edit</button></a>
                                <a href="/MyEvents/delete_team/{{$row->memberid}}"><button class="btn btn-danger">Delete</button></a>
                                </form> 
                            @endif
                             
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-right">
                <a href="/MyEvents/add_member/{{$id}}"><button class="btn btn-success mybutton">Add</button></a>
            </div>  
        </div>
        <!-- Table end -->
        <br>
        <div class="text-center mt-2">
            <a href="/home"><button class="btn btn-primary mybutton">Back</button></a>
        </div>
    </div>
@endsection