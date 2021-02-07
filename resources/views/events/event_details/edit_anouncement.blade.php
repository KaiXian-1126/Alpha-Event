@extends("layouts.event", ["id"=>$id])
@section("content")
  <!-- Main Content -->
    <div class="col-md-9"> 
        <div class="jumbotron">
            <div class="col-md">
                <br><br>
                <h2 style="text-align:center;">Anouncement</h2>
                <br>
                <div class="container" style="padding:5%;">  
                    <form action="/events/event_details/event-anouncement/{{$id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea name='body' id='summary-ckeditor' class="form-control" placeholder='Enter text here..'>{{$event->Announcement}}</textarea>
                        </div>
                        <br>
                        <br>

                        <div class="row">
                            <div class="col" style="text-align:center;">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>

                            <div class="col" style="text-align:center;">
                                <a href="/events/event_details/edit_detail/{{$event->Event_id}}"><button type="button" class="btn btn-danger">Cancel</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
       
@endsection
