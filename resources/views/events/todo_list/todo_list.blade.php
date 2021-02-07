@extends("layouts.event", ["id"=>$id])
    @section("content")
    <div class="col-md-9"> 
        <!-- col start -->
        <h1 class="mb-4 mt-3" style="font-size: 16px">{{$event}} | To-do List</h1>     
            <h2 class="mb-4 mt-3" style="font-size: 14px">{{$pid}}</h2>    
                @if ($errors->any())
                <div class="alert alert-danger fade show alert-dismissible" role="alert">
                    <i style="color:rgba(255, 5, 5, 0.637);" class="fas fa-exclamation-circle fa-lg"></i><b>&nbsp;   &nbsp;Title field is requried !!! </b> Please enter the title before click on add.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
             @endif
                <div class="container-fluid">
                    <div class="row">
                        <!-- To do end-->
                        <div class="col-lg-4 d-flex justify-content-center mb-4">
                            <div class="card" style="width: 90%;">
                                <div class="card-header" style="background-color: #B7E6A9">
                                    <p style="text-align: center; font-size:1.5rem;">To Do</p>
                                    <form action="/events/todo_list/add-todo" method="post">
                                    @csrf 
                                        <div class="row">
                                            <div class="input-group mb-3">
                                                    <input type="hidden" name="hidden1" value="{{$pid}}">     
                                                    <input type="hidden" name="hidden11" value="{{$id}}">                                          
                                                    <input type="text" class="form-control" style="font-size:15px;" placeholder="Enter title to add task ." name="title1" aria-label="title1" aria-describedby="basic-addon1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary btn-info" type="submit" style="color: white;width:5rem">Add</button>
                                                    </div>
                                            </div>
                                        </div>  
                                    </form>                              
                                </div>
                                <ul class="list-group list-group-flush">
                                    <div class="list-group">
                                        @foreach ($todo as $item1)
                                            <li class="list-group-item">
                                                <a href="/events/todo_list/view_todo/{{$id}}/{{$pid}}/{{$item1->Task_id}}">{{$item1->Task_name}}</a>
                                                <a href="/events/todo_list/delete_todo/{{$id}}/{{$pid}}/{{$item1->Task_id}}">
                                                    <button type="button" class="close" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button></a>
                                            </li>    
                                        @endforeach
                                        
                                    </div>                                 
                                </ul>
                            </div>
                        </div>
                            <!-- To do end-->
                            <!-- In Progress end-->
                            <div class="col-lg-4 d-flex justify-content-center mb-4">
                                <div class="card" style="width: 90%;">
                                    <div class="card-header" style="background-color: #B7E6A9">
                                        <p style="text-align: center; font-size:1.5rem;">In Progress</p>
                                        <form action="/events/todo_list/add-InProgress" method="post">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="hidden" name="hidden2" value="{{$pid}}">     
                                                <input type="hidden" name="hidden22" value="{{$id}}">  
                                                <input type="text" class="form-control" style="font-size:15px;" placeholder="Enter title to add task ." aria-label="title2" name="title2" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary btn-info" type="submit" style="color: white;width:5rem">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <div class="list-group">
                                            @foreach ($InProgress as $item2)
                                                <li class="list-group-item">
                                                    <a href="/events/todo_list/view_todo/{{$id}}/{{$pid}}/{{$item2->Task_id}}">{{$item2->Task_name}}</a>
                                                    <a href="/events/todo_list/delete_todo/{{$id}}/{{$pid}}/{{$item2->Task_id}}">
                                                        <button type="button" class="close" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button></a>
                                                </li>  
                                            @endforeach
                                        </div> 
                                    </ul>
                                </div>
                            </div>
                            <!-- In Progress end-->
                            <!-- Completed start -->
                            <div class="col-lg-4 d-flex justify-content-center mb-4">
                                <div class="card" style="width: 90%;">
                                    <div class="card-header" style="background-color: #B7E6A9">
                                        <p style="text-align: center; font-size:1.5rem;">Completed</p>
                                        <form action="/events/todo_list/add-Completed" method="post">
                                            @csrf
                                            <div class="input-group mb-3">
                                                    <input type="hidden" name="hidden3" value="{{$pid}}">     
                                                    <input type="hidden" name="hidden33" value="{{$id}}">  
                                                    <input type="text" class="form-control" name="title3" style="font-size:15px;" placeholder="Enter title to add task ." aria-label="title3" aria-describedby="basic-addon3">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary btn-info" type="submit" style="color: white;width:5rem">Add</button>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <div class="list-group">
                                            @foreach ($Completed as $item3)
                                                <li class="list-group-item">
                                                    <a href="/events/todo_list/view_todo/{{$id}}/{{$pid}}/{{$item3->Task_id}}">{{$item3->Task_name}}</a>
                                                    <a href="/events/todo_list/delete_todo/{{$id}}/{{$pid}}/{{$item3->Task_id}}">
                                                    <button type="button" class="close" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button></a>
                                                </li>
                                            @endforeach
                                        </div> 
                                    </ul>
                                </div>
                            </div>
                            <!-- Completed end -->
                    </div>
                </div>
                <!-- col end -->
            <div class="row mr-3">
                <div class="col d-flex justify-content-end">
                    <a href="/events/todo_list/all_todo_list/{{$id}}"><button type="button" class="btn btn-primary mr-2">Back</button></a>
                </div>
            </div>
    </div>
    @endsection  

