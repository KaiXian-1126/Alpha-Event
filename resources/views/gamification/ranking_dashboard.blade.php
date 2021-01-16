<!doctype html>
<html lang="en">
  <head>
    <title>Add New Guest List</title>
    @extends("layouts.navigation_bar")
    @section("content")
    <!-- First Container -->
    <div class="container">
        <div class="row mt-2 mb-2">
            <h1>Leaderboard</h1>
        </div>
        <div class="jumbotron">
            <div class="row mt-2 mb-5 d-flex justify-content-center">
                <h2>Top 10 Ranking</h2>
            </div>
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Top</th>
                            <th scope="col">Name</th>
                            <th scope="col">Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>150</b></th>
                            <td><b>Larry</b></td>
                            <td><b>the Bird</b></td> 
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <!-- End First Container -->

            </div>
        </div>
    </main>
  </body>
</html>
@endsection