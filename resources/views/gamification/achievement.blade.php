<!doctype html>
<html lang="en">
  <head>
    <title>Achievement</title>
    @extends("layouts.navigation_bar")
    @section("content")
    
    <div class="container">
        <div class="accordion mt-5 mb-5" id="accordionExample1">
            <div class="card">
                <div class="card-header" id="headingOne" style="background-color:#ffffbb">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h2 style="font-size: 20px">Achievement</h2>
                    </button>
                </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">
                <div class="card-body">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <div class="card text-black mb-3 text-center" style="width: 100%">
                                        <div class="card-header" style="background-color:#bbffff"><b>Total Achievement Scores</b></div>
                                        <div class="card-body" style="background-color:#ffd7dd;">
                                            <h5 class="card-title">0</h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center">
                                    <div class="card text-black mb-3 text-center" style="width: 100%">
                                        <div class="card-header" style="background-color:#bbffff"><b>Monthly Achievement Scores</b></div>
                                        <div class="card-body" style="background-color:#ffd7dd;">
                                            <h5 class="card-title">0</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col">Achievement</th>
                    <th scope="col">Progress</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <th scope="col">1</th>
                        <td>Orginize and finish 100 events</td>
                        <td>0 / 100</td>
                        <td></td>
                    </tr>
                    <tr class="table-danger">
                        <th scope="col">2</th>
                        <td>Login 100 days continuously</td>
                        <td>6 / 100</td>
                        <td></td>
                    </tr>
                    <tr class="table-info">
                        <th scope="col">3</th>
                        <td>Attend 100 events</td>
                        <td>6 / 100</td>
                        <td></td>
                    </tr>
                    <tr class="table-danger">
                        <th scope="col">4</th>
                        <td>Sent the invitation to 1000 users</td>
                        <td>8 / 1000</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    
    
    <!--
    <div class="container-fluid" style="margin:2%;background-color:lightgray ">
        <h1>Achievement</h1>
        <div class="row">
            <div class="col" style="text-align:center;margin-top:100px;">
                <h1>Total achievement</h1>
                <br>
                <h2>30</h2>
                <br>
                <h1>Completed achievement</h1>
                <br>
                <h2>10</h2>
                <br>
                <button type="button" class="btn btn-primary"><a href="#" class="my-btn-link">Back</a></button>
                <br>
                <br>
            </div>
         </div>   
    </div>
    <br><br>

    <div class="container-fluid" style="margin:2%;background-color:lightgray ">
        <div class="table-responsive" style="margin-bottom:5%;">
            <table class="table" style="text-align:center;">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Achievement</th>
                    <th scope="col">Progress</th>
                    <th scope="col">Status</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td style="padding-top:2%;">1</td>
                    <td style="padding-top:2%;">Invite 50 guest to join event</td>
                    <td style="padding-top:2%;">50/50</td>
                    <td><img  src="{{ URL::asset('assets/img/achievement.png') }}" style="width:100px;height:80px;"></td>
                    </tr>

                    <tr>
                        <td style="padding-top:2%;">2</td>
                        <td style="padding-top:2%;">Invite30 guest to join event</td>
                        <td style="padding-top:2%;">10/50</td>
                        <td></td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    -->
    </body>
</html>
    @endsection