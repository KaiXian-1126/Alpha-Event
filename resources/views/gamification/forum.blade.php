@extends('layouts.mainpage')

@section('content')

<div class="container" style="margin-top:100px; background-color:lightgray">
    <div class="row">
        <div class="col">
            <p>Username</p>
            <div class="container" style="text-align:center;">
                <p><img id="output"></p>
            </div>
            <textarea class="form-control" rows="5" placeholder="Write something..."></textarea>

            <div style="text-align: center;">
                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                <p><label for="file" class="btn btn-primary">Upload Image</label></p>
                <p><button type="button" id="cancel_image" class="btn btn-danger" style="display:none;" onclick="CancelImage()">Cancel image</button></p>
                <p><button type="button" id="post" class="btn btn-primary" onclick="confirm('Are you sure to post?')">Post</button></p>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top:100px; background-color:lightgray;margin-bottom:5%;">
   <p> PosterName</p>
   <br>
   <p>11 minutes ago</p>
   <div class="row">
       <div class="col">
           <textarea readonly style="width:100%;" rows="5"></textarea>
       </div>
   </div>

   <div class="row">
        <div class="col">
           <p><img id="postimage"></p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <img  src="{{ URL::asset('assets/img/like.png') }}" style="width:30px;height:30px;display:inline-block">
            <p style="display:inline-block">30</p>
         </div>
         <div class="col" >
         </div>
         <div class="col" >
        </div>
        
        
         <div class="col">
            
            <p> 0comments</p>
         </div>
         
         <div class="col">
           
         </div>

         <div class="col">
            <button type="button" class="btn btn-primary"><img  src="{{ URL::asset('assets/img/likebutton.png') }}" 
                style="width:20px;height:20px;display:inline-block"><br>Like</button>
         </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col">
             <input type="text" style="width:80%;" placeholder="Comment here">
        </div>
    </div>
</div>
@endsection


<script>
    var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
    image.style.width="200";
    image.style.height="200";

    document.getElementById('cancel_image').style.display="inline-block";

};

function CancelImage(){
    document.getElementById('output').src="";
    document.getElementById('output').style.width="0";
    document.getElementById('output').style.height="0";
    document.getElementById('cancel_image').style.display="none";

}

</script>