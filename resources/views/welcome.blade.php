@extends('layouts.dashboard')

@section('content')

      <div class="row justify-self-center mt-5 mb-5">
          <p class="welcomeScreenText" >Events Management Software<br>For all kind of events</p>
          <a href="{{ url('/register') }}"><button class="btn btn-warning col-md-4 welcomeScreenButton" >GET START</button></a>
      </div>

      <!--  start -->
      <div class="text-center">
        <div class="row ">
            <div class="col-md-4 align-self-center">
                <div class="row">
                    <div class="card mb-2 border-0" style="background-color: #d2d2f3">
                        <div class="row">
                          <div class="col-md-4 align-self-center text-center">
                            <i class="fa fa-envelope fa-3x"></i>
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <p class="card-text welcomeScreen text-center">Online Invitation</p>
                            </div>
                          </div>
                        </div>
                    </div>
               
                </div>
            </div>
            <div class="col-md-4 align-self-center">
                <div class="row">
                    <div class="card mb-2 border-0" style="background-color: #d2d2f3">
                        <div class="row">
                          <div class="col-md-4 align-self-center text-center">
                            <i class="fa fa-group fa-3x"></i>
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <p class="card-text welcomeScreen text-center">Easy manage<br> Guest List</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-md-4 align-self-center">
                <div class="row">
                    <div class="card mb-2 border-0" style="background-color: #d2d2f3">
                        <div class="row">
                          <div class="col-md-4 align-self-center text-center">
                            <i class="fa fa-calendar fa-3x"></i>
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <p class="card-text welcomeScreen text-center">Easy to plan <br>an Event</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
      </div>
        <!--  end -->

        
    </div>
@endsection