!doctype html>
<html lang="en">

<head>
    <title>Edit event</title>
</head>
@extends("layouts.eventsidebar")
@section("content")

<!-- Main Content -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
    <div class="container">
        <div class="row">
            <!-- col start -->
            
            <div class="col-sm-9" >
                
                <br><br>
                
                <div class="container" style= "padding-right:10%; ">
                <h1 style="font-size: 16px">Program Name | Department</h1>
                <br><br>
                <div class="container" style="border:1px solid black;margin-bottom:10%;" >
                    <br><br>
                    <h2 style="text-decoration:underline; text-align:center;">Uploaded Image</h2>
                    <br>
                    <div class="container" style="border:1px solid black; width:95%;height:300px;padding:0%;">
                        <p><img id="output" style="width: 100%;height:100%" /></p>
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                        <p><label for="file" class="btn btn-primary">Upload Image</label></p>
                    </div>
                    <br><br>
                    <textarea id='summary-ckeditor' class="form-control" placeholder='Body'
                          name="editor" > </textarea>
                    <br>
                    <br>
                    <div class="col" style="text-align:center;">
                        <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                    <br>
                    <br>
                    </div>
                    <br>
                    <br>
                </div>
                
            </div>

            <div>
                
            </div>
        </div>
    </div>
           
        
        <!-- col end -->
            
        
    
</main>

@endsection

</html>


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