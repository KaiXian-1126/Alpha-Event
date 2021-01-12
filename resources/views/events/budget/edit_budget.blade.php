<!doctype html>
<html lang="en">
  <head>
    <title>Add New Guest List</title>
    @extends("layouts.navigationbar_sidebar")
    @section("content")
                <!-- col start -->
                <div class="col">
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
                            <button type="button" class="btn btn-success mr-2">Update</button>
                            <button type="button" class="btn btn-secondary mr-2">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- col end -->
            </div>
        </div>
    </main>
  </body>
</html>
@endsection