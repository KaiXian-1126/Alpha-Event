@extends('layouts.eventpage')

@section('content')
    <div class="container">
        <!-- header start-->
        <div class="eventheader">
            <h3 class=" mb-2">{{$eventName}}
            <span class="verticalline"></span>
            Event member
            <span class="verticalline"></span>
            Edit Member</h3>
        </div>
        <!-- header end-->

        <!-- Add member form start-->
        <div class="text-center">
            <div class="mt-5 mb-4">
                <h3>Edit Member</h3>
            </div>
        </div>
            <form action="/MyEvents/update-member" method="post">
                @csrf
                <div class="addmemberform">
                    <div style="border:1px solid black; border-radius: 10px;">
                        <div class="row mt-4" >
                            <div class="col-4 " style="text-align: right">Name:</div>
                            <div class="col-7"><input type="text" class="form-control" id="name" placeholder="Enter email" name="name" value="{{$editmember->name}}" readonly></div>
                        </div>
                        <br>
                        <div class="row " >
                            <div class="col-4 " style="text-align: right">Email:</div>
                            <div class="col-7"><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$editmember->email}}" readonly></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4 " style="text-align: right">Role:</div>
                            <div class="col-7"><select class="form-select" id="role" name="role" required>
                                <option>{{$editmember->Role}}</option>
                                <option>Top Management</option>
                                <option>Executive</option>
                            </select></div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-4 " style="text-align: right">Department:</div>
                            <div class="col-7"><select class="form-select" id="department" name="department" required>
                                <option>{{$editmember->Department}}</option>
                                <option>Secretary</option>
                                <option>Treasurer</option>
                                <option>Sponsorship</option>
                                <option>Transportation</option>
                                <option>Refreshment</option>
                                <option>Sales</option>
                            </select></div>
                        </div>
                        <input type="hidden" value={{$editmember->memberid}} name='mid' id='eid'> 
                        <input type="hidden" value={{$eventid}} name='eid' id='eid'> 
                        <div class="mt-4 mb-3">
                            <div class="row">
                            <div class="col" style="text-align: right;">
                            <button type="submit" class="btn btn-primary" name="submit">Update</button></div>
                            <div class="col" >
                            <a href="/MyEvents/manage_team/{{$eventid}}"><button type="button" class="btn btn-danger" style="width: 88px" name="cancel">Cancel</button></div></div></a>
                        </div> 
                        
                    </div>
                </div>
                <div class="text-center"></div>
            </form>
        <!-- Add member form end--> 

        <script>

        </script>
    </div>
@endsection