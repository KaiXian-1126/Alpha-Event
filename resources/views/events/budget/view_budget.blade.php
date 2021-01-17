<!doctype html>
<html lang="en">
  <head>
    <title>Guest List</title>
    </head>
    @extends("layouts.eventsidebar")
    @section("content")
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
                <!-- col start -->
                <div class="container">
                <div class="row " >
                <div class="col-md-12">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">Program Name | Budget</h1>
                    <p>Budget List - Department</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Item</th>
                                <th scope="col">Description</th>
                                <th scope="col">Cost</th>
                                <th scope="col"><div class="text-center">Action</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary"><a href="/events/budget/edit_budget" class="my-btn-link">Edit</a></button>
                                    </div>
                                </td>    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p>Total Amount: RM XXXX</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary">
                            <a href="/events/budget/budget_list" class="my-btn-link">Back</a>
                        </button>
                    </div>
                </div>
                <!-- col end -->
            </div>
        </div>
    </main>
    @endsection  
</html>