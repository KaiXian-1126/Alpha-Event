@extends("layouts.eventsidebar", ["id"=>$id])
    @section("content")
    <div class="col-md-9"> 
                <!-- col start -->
            <div class="row " >
                <form action="/events/todo_list/update_todo/{{$id}}/{{$pid}}/{{$tid}}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <h1 class="mb-4 mt-3" style="font-size: 16px">{{$event}} | To-do List</h1>
                        <h2 class="mb-4 mt-3" style="font-size: 14px">{{$edit->Department}} | To-do</h2>
                        <div class="row mb-3 mr-2">         
                            <div class="input-group">
                                <div class="col-md-3 input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="width: 100%">Title</span>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="title" value="{{$edit->Task_name}}" aria-label="title" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mr-2">
                            <div class="input-group">
                                <div class="col-md-3 input-group-prepend">
                                    <span class="input-group-text" style="width: 100%">Description</span>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" aria-label="With textarea" name="desc" placeholder="Enter text here...">{{$edit->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mr-2">
                            <div class="input-group">
                                <div class="col-md-3 input-group-prepend">
                                    <span class="input-group-text"  style="width: 100%">Comment</span>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" aria-label="With textarea" name="comment" placeholder="Enter text here...">{{$edit->comment}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 mr-2">
                            <div class="input-group">
                                <div class="col-md-3 input-group-prepend">
                                    <span class="input-group-text"  style="width: 100%">Status</span>
                                </div>
                                <div class="col-md-7">
                                    <select class="form-select" id="status" name="status">
                                        <option >{{$edit->status}}</option>
                                        <option >To do</option>
                                        <option >In Progress</option>
                                        <option >Completed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-10 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <a href="/events/todo_list/todo_list/{{$id}}/{{$pid}}"><button type="button" class="btn btn-danger mr-2">Cancel</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
      
                <!-- col end -->
    </main> 
   @endsection  
</html>