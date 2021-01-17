<!doctype html>
<html lang="en">
  <head>
    <title>Reward</title>
    @extends("layouts.navigation_bar")
    @section("content")
    
    <h1>Reward</h1>
    <br><br>
    <div class="container-fluid">
        <div class="row" style="text-align:center;margin-bottom:80px;">
            <div class="col">
                <input type="search" placeholder="search" style="width:300px;height:50px;">
            </div>
        </div>

        <div class="row" style="text-align:center;">
            <div class="col-sm-8" >
            </div>
            <div class="col">
                <div class="container" style="padding-right:20%;padding-left:20%;">
                    <h5 style="background-color:lightgray;border-radius:100px;padding-top:5%;padding-bottom:5%;">Available point : 3000</h5>
                </div>
                <br>
                <div class="container" style="padding-right:20%;padding-left:20%;">
                    <button type="button" class="btn btn-primary"><a href="#" class="my-btn-link" style="font-size:20px;">Back</a></button>
                </div>

            </div>

            
        </div>
            <br>
            <br>
            <div class="container-fluid" style="background-color:lightgray ">
                <div class="table-responsive" style="margin-bottom:5%;">
                    <table class="table" style="text-align:center;">
                        <thead>
                            <tr>
                                <th scope="col" style="text-decoration: underline;" colspan="3">Name</th>
                                <th scope="col" style="text-decoration: underline;">Quantity</th>
                                <th scope="col" style="text-decoration: underline;">Required points</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding-top:2%;" colspan="3">
                                    <img  src="{{ URL::asset('assets/img/achievement.png') }}" style="width:100px;height:80px;"><br>
                                    <p>Invitation card 1</p>
                                </td>
                                <td style="padding-top:70px;">50</td>
                                <td style="padding-top:70px;">3500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
           
    </div>
    
    

    @endsection