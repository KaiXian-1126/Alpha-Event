<!doctype html>
<html lang="en">
  <head>
    <title>Leaderboard</title>

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
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Badge Points</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                    <?php 
                     $counter = 1;
                    for($i = 0 ; $i < sizeof($nameList) ; $i++){
                    ?>
                        <tr>
                            <th scope="row"><?php echo $counter++; ?></th>
                            <td><div id="alias"><?php echo $nameList[$i]; ?></div></td>
                            <td id="score"><?php echo $scoreList[$i]; ?></td>
                        </tr>
                   <?php
                        }
                    ?>
                        
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

<!-- Ajax to get the data from tenenet -->
