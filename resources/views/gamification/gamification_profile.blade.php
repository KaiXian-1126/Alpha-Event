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
                    <div class="card" style="width: 10rem; height: 10rem;">
                        <img class="card-img-top" src="{{ URL::asset('assets/img/profile.png') }}" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-4 text-center mt-2 mb-2">
                <h2>Name</h2>
                <p>email@gmail.com</p>
                <p>0123456789</p>
                </div>
                <div class="col-md-4 mt-2 mb-2">
                    <div class="row d-flex justify-content-center">
                        <h2>Current Medal</h2>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <img class="card-img-top" style="width: 100px; height: 100px;" src="{{ URL::asset('assets/img/profile.png') }}" alt="Card image cap">
                    </div>
                    <div class="row d-flex justify-content-center">
                        <p>Point: 3000</p>
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
                            <a class="my-btn-link" href="#">Top Up</a>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mb-5">
                    <div class="row d-flex justify-content-center mt-2 mb-2">
                        <h3>Available points</h3>
                    </div>
                    <div class="row d-flex justify-content-center mt-2 mb-2">
                        <p>5000</p>
                    </div>
                    <div class="row d-flex justify-content-center mt-2 mb-2">
                        <button type="button" class="btn btn-primary">
                            <a class="my-btn-link" href="#">Reward</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container end -->
    </main>
  </body>
</html>
@endsection