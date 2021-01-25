@extends('layouts.dashboard')

@section('content')
<div class="col">
    <p style="text-align: center;"><button type="button" class="btn btn-primary" ><a href="/invitation/view_invitation" style="color:white;">Back</a></button></p>
<div class="container" style="margin:auto;">
    <div class="col" >
        <div class="container" style= "padding-right:10%; ">
            <br><br>
        <br><br>
        <div class="container" style="border:1px solid black;margin-bottom:10%;" >
            <br><br>
            <div class="container" style="border:1px solid black; width:95%;height:400px;padding:0%;">
                <p><img src="{{asset('image')}}/{{$data['id']->Image}}" style="width: 100%;height:400px" /></p>
            </div>
            <br>
            <br>
            <p>{!!$data['id']->Text!!}</p>
            <br>
            </div>
            <br>
            <br>
        </div>
        
    </div>
</div>
</div>
@endsection