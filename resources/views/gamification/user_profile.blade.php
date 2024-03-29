<!doctype html>
<html lang="en">
  <head>
    <title>Add New Guest List</title>
    @extends("layouts.gamification")
    @section("content")
    <!-- First Container -->
    <div class="container">
        
        <div class="jumbotron mt-5">
            <div class="row mt-2 mb-5 d-flex justify-content-center">
                <h2>User Profile</h2>
            </div>
            <hr>
            
            <div class="row d-flex justify-content-center mt-2 mb-5">
                <div class="card" style="width: 10rem; height: 10rem;">
                    <img class="card-img-top" src="{{ URL::asset('assets/img/profile.png') }}" alt="Card image cap">
                </div>
            </div>
            <form method="post" action="/gamification/update-user-profile">
                @csrf
                <div class="row mb-3 mx-0 pd-0">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend col-md-3 mx-0 px-0"> 
                            <span class="input-group-text" id="basic-addon2" style="width:100%">Email</span>
                        </div>
                        <input name="email" value="{{$user->email}}" type="text" style="width:100%" class="col-md-9 form-control" aria-label="Email" aria-describedby="basic-addon2" readonly>
                    </div>
                </div>
                <div class="row mb-3 mx-0 pd-0">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend col-md-3 mx-0 px-0"> 
                            <span class="input-group-text" id="basic-addon1" style="width:100%">Name</span>
                        </div>
                        <input name="name" value="{{$user->name}}" type="text" style="width:100%" class="col-md-9 form-control" aria-label="Name" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row mb-3 mx-0 pd-0">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend col-md-3 mx-0 px-0"> 
                            <span class="input-group-text" id="basic-addon3" style="width:100%">Phone</span>
                        </div>
                        <input name="phone" value="{{$user->phone}}" type="text" style="width:100%" class="col-md-9 form-control" aria-label="Phone" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success mr-2">
                       Save Changes
                    </button>
                    <button type="button" class="btn btn-secondary mr-2">
                        <a href="/gamification/gamification_profile" class="my-btn-link">Back</a>
                    </button>
                </div>
            </form>     
        </div>
    </div>
    <!-- End First Container -->

            </div>
        </div>
    </main>
  </body>
</html>
@endsection