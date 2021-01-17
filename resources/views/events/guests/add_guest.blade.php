<!doctype html>
<html lang="en">
  <head>
    <title>Gamification Profile</title>
    @extends("layouts.navigation_bar")
    @section("content")
            </div>
        </div>
    <main>
        <div class="container">
            <div class="jumbotron">
                <div class="row d-flex justify-content-center">
                    <h1>Fill the information to add guest</h1>
                </div>
                @if(session('message'))    
                    <div class="alert alert-danger alert-dismissible fade-in text-center mt-3">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p class="mb-0">{{ session('message')}}</p>
                    </div>
                @endif
                <form action="/events/guests/add-guest" method="post">
                @csrf
                    <input type="hidden" value="1" name="event-id">
                    <div class="row mt-5 mb-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                            </div>
                            <input type="text" name="email" class="form-control" placeholder="Enter email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mr-5 mt-3">
                            Add
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </main>
  </body>
</html>
@endsection