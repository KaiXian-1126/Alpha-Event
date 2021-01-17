@extends('layouts.mainpage')

@section('content')
<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-3">
    
    <div class="container" style="border:1px solid black;margin-top:30%;padding:0%;">
            
        
            <img src="" style="width:100%;height:300px;">
        </div>
    </div>

    <div class="col-md-1">
    </div>

    <div class="col-md-7" style="margin-top:5%;margin-bottom:8%;">
        <div class="container" style="margin-bottom:5%;">
            
            <p id="demo" style="text-align: center;font-size: 30px;"></p>
            </div>
            
            <div class="row ">
                    
                <div class="col-sm-5" style="margin-bottom:5%;">
                  <div class="container">
                    
                    <br>
                    <br>
                    <div class="row">
                       <div class="col-5">
                           <p>Event name</p>
                       </div>
            
                       <div class="col-1">
                        <p>:</p>
                       </div>
            
                       <div class="col-5">
                        <p>Event 1</p>
                       </div>
                    </div>

                    <div class="row">
                        <div class="col-5">
                            <p>Date</p>
                        </div>
             
                        <div class="col-1">
                         <p>:</p>
                        </div>
             
                        <div class="col-5">
                         <p>12/12/2020</p>
                        </div>
                     </div>
            
                    <div class="row">
                        <div class="col-5">
                            <p>Time</p>
                        </div>
             
                        <div class="col-1">
                         <p>:</p>
                        </div>
             
                        <div class="col-5">
                         <p>08:00 p.m.</p>
                        </div>
                     </div>
            
                     <div class="row">
                        <div class="col-5">
                            <p>Venue</p>
                        </div>
             
                        <div class="col-1">
                         <p>:</p>
                        </div>
             
                        <div class="col-5">
                         <p>Dewan Sultan Iskandar, UTM Johor</p>
                        </div>
                     </div>
            
                     <div class="row">
                        <div class="col-5">
                            <p>Description</p>
                        </div>
             
                        <div class="col-1">
                         <p>:</p>
                        </div>
             
                        <div class="col-5">
                         <p>This is cultural event</p>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-5">
                            <p>Any enquiry</p>
                        </div>
             
                        <div class="col-1">
                         <p>:</p>
                        </div>
             
                        <div class="col-5">
                         <p>010-835-1773</p>
                        </div>
                     </div>
                     <br>


                     <div class="row">
                         <div class="col">
                        <div style="text-align: center;">
                            <a href="/PublicEvents/publicevent"><button type="button" class="btn btn-primary mt-3">Back</button></a>
                            </div>
                        </div>
                            
                        <div class="col">
                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary mt-3">Register</button>
                            </div>
                        </div>
                     </div>
                    
            
                     </div>
                </div>

                
              
                
                
            </div>
    </div>
@endsection