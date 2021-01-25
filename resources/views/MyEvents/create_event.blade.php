@extends('layouts.eventpage')

@section('content')
    <div class="container">

        <!-- Add member form start-->
        <div class="text-center mb-3">
            <div class="mt-4">
                <h3>Create Event</h3>
            </div>
        </div>
            <form action="/MyEvents/create-event" method="post">
            @csrf
                <div class="addmemberform">
                    <div style="border:1px solid black; border-radius: 10px;">
                        <div class="row mt-4" >
                            <div class="col-4 required-field" style="text-align: right">Event Name</div>
                            <div class="col-7"><input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required></div>
                        </div>
                        <br>
                        <div class="row" >
                            <div class="col-4 " style="text-align: right;">Start Date</div>
                            <div class="col-7" >
                                <div class="form-group "><input class="form-control" type="date" id="start_date" name="start_date" required></div>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col-4 " style="text-align: right;">End Date</div>
                            <div class="col-7" >
                                <div class="form-group "><input class="form-control" type="date" id="end_date" name="end_date" required></div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-4 " style="text-align: right;">Start Time</div>
                            <div class="col-7" >
                                <div class="form-group "><input class="form-control" type="time" id="start_time" name="start_time" required></div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-4 " style="text-align: right;">End Time</div>
                            <div class="col-7" >
                                <div class="form-group "><input class="form-control" type="time" id="end_time" name="end_time" required></div>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col-4 " style="text-align: right">Location</div>
                            <div class="col-7"><input type="text" class="form-control" id="location" placeholder="Enter location" name="location" required></div>
                        </div>
                        <br>
                        <!--
                        <div class="row">
                            <div class="col-4 " style="text-align: right">Tentative</div>
                            <div class="col-7 form-group">
                                
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                              </div></div>
                        </div>
                        -->

                        
                        <div class="mt-4 mb-3">
                            <div class="row">
                            <div class="col" style="text-align: right;">
                            <button type="submit" class="btn btn-primary" name="submit">Confirm</button></div>
                            <div class="col" >
                            <a href="../home"><button type="button" class="btn btn-danger" style="width: 88px" name="cancel">Cancel</button></a></div></div>
                        </div>  
               
                    </div>
                   
                </div>
            </form>
        <!-- Add member form end--> 

        <script>
            // show filename function
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
    </div>
@endsection