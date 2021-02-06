@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <!-- header start-->
        <div class="eventheader">
            <h3 class=" mb-2">{{$eventName}}
            <span class="verticalline"></span>
            Event member
            <span class="verticalline"></span>
            Add Member</h3>
        </div>
        <!-- header end-->

        <!-- Add member form start-->
        <div class="text-center">
            <div class="mt-5 mb-4">
                <h3>Add New Member</h3>
            </div>
        </div>
        <div class="jumbotron">
            <form action="/MyEvents/add-new-member" method="post">
                @csrf
                <div class="addmemberform">
                    <div class="row mt-4" >
                        <div class="col-4 " style="text-align: right">Email:</div>
                        <div class="col-7"><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4 " style="text-align: right">Role:</div>
                        <div class="col-7"><select class="custom-select" id="role" name="role" onclick="Checking();">
                            <option>Select role</option>
                            <option>Top Management</option>
                            <option value="Executive">Executive</option>
                        </select></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4 " style="text-align: right">Department:</div>
                        <div class="col-7">
                            <select class="custom-select" id="department" name="department" style="display: none">
                                <option>Select department</option>
                                <option>Secretary</option>
                                <option>Treasurer</option>
                                <option>Sponsorship</option>
                            </select>
                            <select class="custom-select" id="department2" name="department2" style="display: inline-block">
                                <option>Select department</option>
                                <option>Transportation</option>
                                <option>Refreshment</option>
                                <option>Sales</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" value={{$id}} name='eid' id='eid'> 
                    <div class="mt-4 mb-3">
                        <div class="row">
                        <div class="col" style="text-align: right;">
                        <button type="submit" class="btn btn-primary" name="submit">Comfirm</button></div>
                        <div class="col" >
                        <a href="/MyEvents/manage_team/{{$id}}"><button type="button" class="btn btn-danger" style="width: 88px" name="cancel">Cancel</button></div></div></a>
                    </div> 
                </div>
                <div class="text-center"></div>
            </form>
        </div>
        <!-- Add member form end--> 
        <script>
        function Checking() {
            if (document.getElementById('role').value=="Top Management") {
                document.getElementById('department2').style.display = 'none';
                document.getElementById('department').style.display = 'inline-block';
    
            } else if(document.getElementById('role').value=="Executive") {
                document.getElementById('department2').style.display = 'inline-block';
                document.getElementById('department').style.display = 'none';
            }
        }
        </script>
    </div>
@endsection