<!doctype html>
<html lang="en">
  <head>
    <title>Add New Guest List</title>
    @extends("layouts.navigationbar_sidebar")
    @section("content")
                <!-- col start -->
                <div class="col ">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">Program Name | Budget</h1>
                    <p>Budget List</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Department</th>
                                <th scope="col">Number of Item</th>
                                <th scope="col">Budget Amount</th>
                                <th scope="col">Under Budget</th>
                                <th scope="col" colspan="3"><div class="text-center">Action</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>
                                   Yes
                                </td>
                                <td><div class="d-flex justify-content-center"><button type="button" class="btn btn-info">View</button></div></td> 
                                <td><div class="d-flex justify-content-center"><button type="button" class="btn btn-primary">Edit</button></div></td> 
                                <td><div class="d-flex justify-content-center"><button type="button" class="btn btn-danger">Delete</button></div></td>   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-success rounded-circle">+</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p>Total Amount: RM XXXX</p>
                    </div>
                </div>
                <!-- col end -->
            </div>
        </div>
    </main>
  </body>
</html>
@endsection