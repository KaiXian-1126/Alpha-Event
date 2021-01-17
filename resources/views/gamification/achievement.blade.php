<!doctype html>
<html lang="en">
  <head>
    <title>Achievement</title>
    @extends("layouts.navigation_bar")
    @section("content")
    
    {{-- <img class="card-img-top" src="{{ URL::asset('assets/img/achievement.png') }}" alt="Card image cap"> --}}
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

    @endsection