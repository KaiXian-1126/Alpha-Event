@extends('layouts.eventpage')

@section('content')
    <div class="container">
        <!-- header start-->
        <div class="eventheader">
            <h3 class=" mb-2">Cultural Night
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
            <form action="">
                <div class="addmemberform">
                    <div style="border:1px solid black; border-radius: 10px;">
                        <div class="row mt-4" >
                            <div class="col-4 " style="text-align: right">Email:</div>
                            <div class="col-7"><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4 " style="text-align: right">Role:</div>
                            <div class="col-7"><select class="form-select" id="role" name="role">
                                <option>Select role</option>
                                <option>Top Management</option>
                                <option>Executive</option>
                            </select></div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-4 " style="text-align: right">Department:</div>
                            <div class="col-7"><select class="form-select" id="department" name="department">
                                <option>Select department</option>
                                <option>Transportation</option>
                                <option>Refreshment</option>
                            </select></div>
                        </div>
                        <div class="mt-4 mb-3">
                            <div class="row">
                            <div class="col" style="text-align: right;">
                            <button type="submit" class="btn btn-primary" name="submit">Comfirm</button></div>
                            <div class="col" >
                            <button type="button" class="btn btn-danger" style="width: 88px" name="cancel">Cancel</button></div></div>
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