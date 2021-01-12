<!doctype html>
<html lang="en">
  <head>
    <title>Guest List</title>
    @extends("layouts.navigationbar_sidebar")
    @section("content")
                <!-- col start -->
                <div class="col">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">Program Name | Guest List</h1>
                    
                        <form class="form-inline d-flex mb-4">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search Guest List" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <div class="row mt-2 mb-2">
                            <div class="col d-flex justify-content-end">
                                <button type="button" class="btn btn-info"><a class="my-btn-link" href="/events/guests/add_guest_list">Add Guest List</a></button>
                            </div>
                        </div>
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Guest List</th>
                                <th scope="col">Number of Guests</th>
                                <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td  colspan="2">
                                    <button type="button" class="btn btn-primary"><a href="#" class="my-btn-link">Edit</a></button>
                                    <button type="button" class="btn btn-danger"><a href="#" class="my-btn-link">Delete</a></button></td>   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- col end -->
            </div>
        </div>
    </main>
  </body>
</html>
@endsection