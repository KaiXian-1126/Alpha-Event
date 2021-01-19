<!doctype html>
<html lang="en">
  <head>
    <title>Challenge</title>
    @extends("layouts.navigation_bar")
    @section("content")
    <main>
    
    <div class="container">
        <div class="row mt-3 mb-3">
            <h1>Daily Challenge</h1>
        </div>
        <div class="accordion mt-5 mb-5" id="accordionExample1">
            <div class="card">
                <div class="card-header" id="headingOne" style="background-color:#ffffbb">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h2 style="font-size: 20px">Daily Challenge</h2>
                    </button>
                </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample1">
                <div class="card-body">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="table-primary">
                                        <th scope="col">Task</th>
                                        <th scope="col">Points</th>
                                        <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-info">
                                            <td>Daily Login</td>
                                            <td>50 Points</td>
                                            <td>Completed</td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td>Open Leaderboard</td>
                                            <td>5 Points</td>
                                            <td>In Progress</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="accordion mt-5 mb-5" id="accordionExample2">
            <div class="card">
                <div class="card-header" id="headingTwo" style="background-color:#bbffff">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <h2 style="font-size: 20px">Weekly Challenge</h2>
                    </button>
                </h5>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample2">
                <div class="card-body">
                <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="table-primary">
                                        <th scope="col">Task</th>
                                        <th scope="col">Points</th>
                                        <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-info">
                                            <td>Invite 30 guests to join event</td>
                                            <td>50 Points</td>
                                            <td>In Progress</td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td>Attend 3 events</td>
                                            <td>50 Points</td>
                                            <td>In Progress</td>
                                        </tr>
                                        <tr class="table-info">
                                            <td>Create 3 events</td>
                                            <td>50 Points</td>
                                            <td>In Progress</td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td>Complete 3 orginzed events</td>
                                            <td>50 Points</td>
                                            <td>In Progress</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
    </body>
    </html>