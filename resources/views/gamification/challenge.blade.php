<!doctype html>
<html lang="en">
  <head>
    <title>Challenge</title>
    @extends("layouts.navigation_bar")
    @section("content")
    <div class="container-fluid">
        <h1>Challenge</h1>
            <br><br>
            <div class="container-fluid" style="background-color: lightgray;border-radius:100px;padding-bottom:15%;">
                <div class="row" style="text-align:center;">
                    <div class="col" style="padding:30px;">
                        <h3 style="background-color: lightgreen;padding:10px;border-radius:100px;"><a href="">Daily Challenge</a></h3>
                    </div>

                    <div class="col" style="padding:30px;">
                        <h3 style="background-color: lightblue;padding:10px;border-radius:100px;"><a href="">Weekly Challenge</a></h3>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table" style="text-align:center;background-color:lightyellow;border:1px solid black;">
                        <thead>
                            <tr>
                                <th scope="col">Quest</th>
                                <th scope="col">Points</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding-top:2%;">Daily Login</td>
                                <td style="padding-top:2%;">10 points</td>
                                <td style="padding-top:2%;background-color:lightgreen">Completed</td>
                            </tr>
                            
                            <tr>
                                <td style="padding-top:2%;">2</td>
                                <td style="padding-top:2%;">Invite30 guest to join event</td>
                                <td style="padding-top:2%;background-color:gray">In Progress</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    @endsection