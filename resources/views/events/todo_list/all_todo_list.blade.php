<!doctype html>
<html lang="en">
  <head>
    <title>Todo List</title>
    </head>
    @extends("layouts.eventsidebar", ["id"=>$id])
    @section("content")
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
                <!-- col start -->
            <div class="row text-center">
                <div class="col-md">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">{{$eventname}} | Todo List</h1>
                    <p>All Todo List </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Department</th>
                                <th scope="col">Members</th>
                                <th scope="col">To do</th>
                                <th scope="col">In Progress</th>
                                <th scope="col">Completed</th>
                                <th scope="col"><div class="text-center">Action</div></th>
                                </tr>
                            </thead>

                            <?php
                            $department=array();
                            foreach ($list as $item)
                            if (in_array($item->Department, $department)==false) {
                                array_push($department,$item->Department);
                            }   
                                
                            $memberNo = array_fill(0, count($department)+1, 0);
                            $todo = array_fill(0, count($department)+1, 0);
                            $inProgress = array_fill(0, count($department)+1, 0);
                            $completed = array_fill(0, count($department)+1, 0);
                            
                            for($count=0;$count<count($department);$count++){
                            ?>
                                @foreach ($list as $item2)
                                    @if ($item2->Department==$department[$count])
                                        <?php $memberNo[$count]++;?>
                                    @endif    
                                @endforeach

                                @foreach ($data as $a)
                                    @if ($a->Department==$department[$count])
                                        @if ($a->status=='To do')
                                            <?php $todo[$count]++;?>
                                        @endif
                                        @if ($a->status=='In Progress')
                                            <?php $inProgress[$count]++;?>
                                        @endif
                                        @if($a->status=='Completed')
                                            <?php $completed[$count]++;?>
                                        @endif
                                    @endif
                               
                                @endforeach
                        <?php } ?>

                            <tbody> 
                        <?php  for($count=0;$count<count($department);$count++)  { ?>                             
                                <tr>
                                    <td>{{$count+1}}</td>
                                    <td>{{$department[$count]}}</td>
                                    <td>{{$memberNo[$count]}}</td>
                                    <td>{{$todo[$count]}}</td>
                                    <td>{{$inProgress[$count]}}</td>
                                    <td>{{$completed[$count]}}</td>
                                    <td><a href="/events/todo_list/todo_list/{{$id}}/{{$department[$count]}}"><button class="btn btn-success">View</button></a></td>
                                </tr>
                        <?php } ?>
                            </tbody>
                        <table>
                    </div>
                </div>
            </div>
                <!-- col end -->

    </main>
    @endsection  
</html>
