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
                <form method="post" action="#">
                    <h1 class="mt-5 mb-5" style="font-size: 16px">Edit Budget - Department - Item</h1>
                        <div class="row mb-3 mx-0 pd-0">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend col-md-3 mx-0 px-0">
                                    <span class="input-group-text" id="basic-addon1" style="width:100%">Item</span>
                                </div>
                                <input type="text" class="col-md-7 form-control" placeholder="Item" aria-label="Item" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="row mb-3 mx-0 pd-0">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend col-md-3 mx-0 px-0"> 
                                    <span class="input-group-text" id="basic-addon2" style="width:100%">Description</span>
                                </div>
                                <input type="text" class="col-md-7 form-control" placeholder="Description" aria-label="Description" aria-describedby="basic-addon2">
                            </div>
                        </div>
                        <div class="row mb-3 mx-0 pd-0">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend col-md-3 mx-0 px-0">
                                    <span class="input-group-text" id="basic-addon3" style="width:100%">Cost</span>
                                </div>
                                <input type="text" class="col-md-7 form-control" placeholder="Cost" aria-label="Cost" aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-success mr-2">
                                <a href="" class="my-btn-link">Update</a>
                            </button>
                            <button type="button" class="btn btn-secondary mr-2">
                                <a href="/events/budget/view_budget" class="my-btn-link">Cancel</a>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- col end -->
            </div>
        </div>
    </main>
    @endsection  
</html>