@extends('layouts.dashboard')

@section('content')
<div class="col">
<div class="container" style="margin:auto;">
    <div class="col" >
        <h1>Card Description</h1>
        <p style="text-align: right; margin-right: 10%;"><button type="button" class="btn btn-primary" ><a href="/invitation/view_invitation" style="color:white;">Back</a></button></p>
        <div class="container" style= "padding-right:10%; ">
            <br><br>
        <br><br>
        <div class="container" style="margin-bottom:10%;background-color:rgba(127, 127, 127, 0.3);padding:5%;" >
            <br><br>
            <div class="container" style="width:95%;height:400px;padding:0%;">
                <p><img src="{{asset('image')}}/{{$data['id']->Image}}" style="width: 100%;height:400px" /></p>
            </div>
            <br><br>
            <div class="container-fluid" style="background-color:rgba(204, 242, 248, 0.4);">
            <br>
            <p>{!!$data['id']->Text!!}</p>
            <br>
            </div>
            <br><br>
            </div>
            <br>
            <br>
        </div>
        
    </div>
</div>
</div>
@endsection