!doctype html>
<html lang="en">

<head>
    <title>Edit event</title>
</head>
@extends("layouts.navigation_bar")
@section("content")

<!-- Main Content -->
<main>
    <div class="container-fluid">
        <div class="row">
            <!-- side bar start -->
            <div class="col-sm-3">
                <div class="card" style="width: 14rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">Event</a></li>
                        <li class="list-group-item">
                            <div id="accordion">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Guests
                                    </button>
                                </h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <a href="#">All Guests
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div id="accordion">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="true" aria-controls="collapseTwo">
                                        To-do List
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="true" aria-controls="collapseTwo">
                                        <a href="#">Department Name</a>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item"><a href="#">Budget</a></li>
                        <li class="list-group-item"><a href="#">Invitation</a></li>
                        <li class="list-group-item"><a href="#">Publish</a></li>
                    </ul>
                </div>
            </div>
            <!-- side bar end -->
            <!-- col start -->
            
            <div class="col-sm-5" >
                <div class="container" style= "padding-right:10%; ">
                <h1 style="font-size: 16px">Program Name | Department</h1>
                <br><br>
                <div class="container" style="border:1px solid black;margin-bottom:10%;" >
                    <br><br>
                    <div class="container" style="border:1px solid black; width:95%;height:200px;padding:0%;">
                        <p><img src="" style="width: 100%;height:100%" /></p>
                    </div>
                    <br>
                    <br>
                    <textarea name='body' class="form-control" placeholder='Body' style="height:200px;" readonly> </textarea>
                    <br>
                    </div>
                    <br>
                    <br>
                </div>
                
            </div>
            <div class="col-sm-3" style="margin-bottom:10%;">
                <div class="container" style="margin-top:30%;border:1px solid black;padding-top:10%;padding-bottom:10%;text-align:center;">
                <h1 style="font-size: 16px;text-decoration:underline;">Send invitation</h1>
                <br><br>
                <p>Send to</p>
                <select name="guest_type" id="guest_type" style="width:200px;font-size:30px;" onchange="Checking()">
                    <option value="guestList">Guest List</option>
                    <option value="guest">Guest</option>
                </select>

                <br>
                <br>

                <select name="guest" id="guest" style="width:200px;font-size:30px; display:none;">
                    <option value="guestList">Tan Zhi Quan</option>
                    <option value="guest">Tok Kai Xian</option>
                </select>
               

                

                
                <select name="guestList" id="guestList" style="width:200px;font-size:30px;">
                    <option >Guest List 1</option>
                    <option >Guest List 2</option>
                </select>
                <br><br>

                <div class="row">
                
                <div class="col">
                <button type="submit" class="btn btn-primary">Back</button>
                </div>

                <div class="col">
                <button type="submit" class="btn btn-primary">Send</button>
                </div>

                </div>
                 

                



                
            </div>
            </div>

            <div>
                
            </div>
        </div>
    </div>
           
        
        <!-- col end -->
            
        
    
</main>

@endsection

</html>

<script>

    function Checking() {
        if (document.getElementById('guest_type').value=="guestList") {
            document.getElementById('guest').style.display = 'none';
            document.getElementById('guestList').style.display = 'inline-block';

        } else if(document.getElementById('guest_type').value=="guest") {
            document.getElementById('guest').style.display = 'inline-block';
            document.getElementById('guestList').style.display = 'none';
        }
    }
    
 </script>