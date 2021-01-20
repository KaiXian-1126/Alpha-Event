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
                            <th scope="col">Points</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                    <?php 
                     $counter = 1;
                    for($i = 1 ; $i <= 10 ; $i++){
                    ?>
                        <tr>
                            <th scope="row"><?php echo $counter; ?></th>
                            <td><div id="alias<?php echo $counter; ?>"></div></td>
                            <td id="score<?php echo $counter++; ?>"></td>
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
    <script>
    $(document).ready(function(){
        // get dashboard
        var topPlayerList = Array();
        $.ajax({url: "http://127.0.0.1:8000/gamification/mockdatadashboard",
            type: "get",
            data: { get_param: 'value' }, 
            dataType: 'json',
            success: function (data) {
                $.each(data.message.data, function(index, element) {
                  $('#alias'+(index+1)).text(data.message.data[index].alias);
                  //get score
                  $.ajax({
                      url: "http://127.0.0.1:8000/gamification/mockdatascore1",
                      type: "get",
                      data: { get_param: 'value' },
                      dataType: "json",
                      success: function(data){
                          $('#score'+(index+1)).text(data.message.score[1].value);
                          
                      }
                  });
                });
            }
            });
        //get score
        });
    </script>
</html>
@endsection

<!-- Ajax to get the data from tenenet -->
