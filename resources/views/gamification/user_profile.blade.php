<!doctype html>
<html lang="en">
  <head>
    <title>Add New Guest List</title>
    @extends("layouts.navigation_bar")
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
            <div class="row mb-3 mx-0 pd-0">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-md-3 mx-0 px-0"> 
                        <span class="input-group-text" id="basic-addon1" style="width:100%">Name</span>
                    </div>
                    <input type="text" style="width:100%" class="col-md-9 form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="row mb-3 mx-0 pd-0">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-md-3 mx-0 px-0"> 
                        <span class="input-group-text" id="basic-addon2" style="width:100%">Email</span>
                    </div>
                    <input type="text" style="width:100%" class="col-md-9 form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                </div>
            </div>
            <div class="row mb-3 mx-0 pd-0">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-md-3 mx-0 px-0"> 
                        <span class="input-group-text" id="basic-addon3" style="width:100%">Phone</span>
                    </div>
                    <input type="text" style="width:100%" class="col-md-9 form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-success mr-2">
                    <a href="#" class="my-btn-link">Save Changes</a>
                </button>
                <button type="button" class="btn btn-secondary mr-2">
                    <a href="#" class="my-btn-link">Back</a>
                </button>
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