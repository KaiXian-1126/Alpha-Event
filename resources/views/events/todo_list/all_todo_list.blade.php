@extends("layouts.event", ["id"=>$id])
@section("content")
    <div class="col-md-9"> 
                <!-- col start -->
            <div class="row">
                <div class="col-md">
                    <h1 class="mb-4 mt-3" style="font-size: 16px">{{$eventname}} | Todo List</h1>
                    <p>All Todo List </p>
                    @if (count($list) == 0)
                    <div class="alert alert-dismissible fade show my-alert" role="alert">
                        No task proposed by department yet.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @else
                    <div class="table-responsive">
                        <table class="table table-hover table-dark">
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
                    @endif
                </div>
            </div>
                <!-- col end -->
                                
    </main>
    @endsection  
</html>
