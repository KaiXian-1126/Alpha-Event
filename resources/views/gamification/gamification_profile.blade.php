<!doctype html>
<html lang="en">
  <head>
    <title>Gamification Profile</title>
    @extends("layouts.navigation_bar")
    @section("content")
            </div>
        </div>
    <main>
        <!-- Container start -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center mt-2 mb-2">
                    <div class="card" style="width: 16rem; height: 16rem;">
                        <img class="card-img-top" src="{{ URL::asset('assets/img/profile.png') }}" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center mt-2 mb-2">
                    <div class="col text-center">
                        <h2 id="user-name">{{$user->name}}</h2>
                        <p id="user-email">{{$user->email}}</p>
                        <p id="user-phone">{{$user->phone}}</p>
                        <button type="button" class="btn btn-secondary mt-3">
                            <a href="/gamification/user_profile" class="my-btn-link">Edit</a>
                        </button>
                    </div>
                    
                </div>
                <div class="col-md-4 mt-2 mb-2">
                    <div class="row d-flex justify-content-center">
                        <h2>Current Medal</h2>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div id="badge-img"></div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <p id="badge-point">Point: </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- Container end -->
        <!-- Container Active Status -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 mb-5">
                    <div class="row d-flex justify-content-center mt-2 mb-2">
                        <h3>Active Until</h3>
                    </div>
                    <div class="row d-flex justify-content-center mt-2 mb-2">
                        <p>32 days</p>
                    </div>
                    <div class="row d-flex justify-content-center mt-2 mb-2">
                        <button type="button" class="btn btn-primary">
                            <a class="my-btn-link" href="/gamification/top_up">Top Up</a>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mb-5">
                    <div class="row d-flex justify-content-center mt-2 mb-2">
                        <h3>Available points</h3>
                    </div>
                    <div class="row d-flex justify-content-center mt-2 mb-2">
                        <p id="reward-point"></p>
                    </div>
                    <div class="row d-flex justify-content-center mt-2 mb-2">
                        <button type="button" class="btn btn-primary">
                            <a class="my-btn-link" href="/gamification/reward">Reward</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container end -->
    </main>
  </body>
  <script>
    $(document).ready(function(){
        // get player
        var topPlayerList = Array();
        var userName = $('#user-name').text();
        var userEmail = $('#user-email').text();
        var userPhone = $('#user-phone').text();
        $.ajax({url: "http://api.tenenet.net/createPlayer?token=333eb0526f782a6de74735d9f97cb50c&alias="+userName+"&id=3&fname="+userEmail+"&lname=",
            type: "get",
        });
        $.ajax({url: "http://127.0.0.1:8000/gamification/mockdatascore1",
            type: "get",
            data: { get_param: 'value' }, 
            dataType: 'json',
            success: function(data){
                //badge point
                    $('#badge-point').text("Points:" + data.message.score[1].value);
                //reward point
                    $('#reward-point').text(data.message.score[2].value);
                if(parseInt(data.message.score[1].value) >= 3000){
                    $('#badge-img').html('<img id="badge-img" class="card-img-top" style="width: 100px; height: 200px;" src="{{ URL::asset('assets/img/gold.png') }}" alt="Card image cap">');
                }
                else if(parseInt(data.message.score[1].value) >= 2000){
                    $('#badge-img').html('<img id="badge-img" class="card-img-top" style="width: 100px; height: 200px;" src="{{ URL::asset('assets/img/silver.png') }}" alt="Card image cap">');
                }else{
                    $('#badge-img').html('<img id="badge-img" class="card-img-top" style="width: 100px; height: 200px;" src="{{ URL::asset('assets/img/bronze.png') }}" alt="Card image cap">');
                }
                }
            });
        });
    </script>
</html>
@endsection