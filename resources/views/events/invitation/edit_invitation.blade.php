<!doctype html>
<html lang="en">

@extends("layouts.event",  ["id"=>$event->Event_id])
@section("content")

<!-- Main Content -->
<div class="col-md-9">
    <div class="container">
        <div class="row">
            <!-- col start -->
            <div class="col-sm-12" >
                <br><br>
                <h1 style="text-align:center;">{{$event->Event_name}}</h1>
                <div style="text-align:right;">
                    <br><br>
                    <button type="button" class="btn btn-primary"><a href="/view-invitation-card/{{$event->Event_id}}" style="color:white;">View Invitation card</a></button>
                    </div>
                <br><br>
                <form action="/save-invitation-record/{{$event->Event_id}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <div class="container-fluid" style= "height:100%; ">
                <div class="row text-center">
                    
                </div>
                @if($validation)    
                    <div class="alert alert-danger alert-dismissible fade-in text-center mt-3">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p class="mb-0">Please go to <a href='/gamification/reward'><b>Reward Page</b></a> to add enable more cards design.</p>
                    </div>
                @else
                <div class="container-fluid" style="border-radius:5%;margin-bottom:10%;height:80%;background-color:rgb(160, 227, 236,0.7);" >
                    <br><br>
                    <h3 style="text-align:center;">Uploaded Image</h3>
                    <br>
                    <div class="container" style=" background-color:rgba(251, 253, 253, 0.952);width:80%;height:300px;padding:0%;text-align:center;">
                      
                        <img id="output" style="width:100%;height:100%;" />
                      
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;" required></p>
                        <p><label for="file" class="btn btn-primary">Upload Image</label></p>
                    </div>
                    <br><br>
                    <div style="width:80%;display:block;margin:auto; ">
                    <textarea name="text" id='summary-ckeditor' class="form-control" required> </textarea>
                    </div>
                    <br>
                    <br>
                    <div class="col" style="text-align:center;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    <br>
                    <br>
                    </div>
                    <br>
                    <br>
                    
                </div>
                @endif
                </form>
                
                
            </div>
        </div>
    </div>
</div>           
        
        <!-- col end -->
@endsection


<script>
    var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

</script>

<script src="//cdn.ckeditor.com/4.15.1/basic/ckeditor.js"></script>
                <script>
                CKEDITOR.replace( 'summary-ckeditor' );
                </script>