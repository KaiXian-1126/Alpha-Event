@extends('layouts.eventpage')

@section('content')
    <div class="container">
        <div class="eventheader">
            <h3 class="mt-4 mb-2">Festival Night
            <span class="verticalline"></span>
            Event member</h3>
        </div>

        <!-- table start -->
        <div class="col"> 
            <div class="row mt-5">
                <h5>Event Member List</h5>
            </div>           
            <div class="table-responsive">
                <table class="table mt-4" style="text-align: center">
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
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td  colspan="2"><button type="button" class="btn btn-primary mybutton">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>   
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-right">
                <button class="btn btn-success mybutton">Add</button>
            </div>  
        </div>
        <!-- Table end -->
        <br>
        <div class="text-center mt-2">
            <button class="btn btn-primary mybutton">Back</button>
        </div>
    </div>
@endsection