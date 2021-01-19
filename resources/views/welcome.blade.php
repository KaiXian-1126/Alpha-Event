@extends('layouts.welcome_page')

@section('content')

    <header class="d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="text-center text-white">
                <div class="row">
                    <div class="col">
                        <h1>Alpha Event</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>An event management solution for all kind of events.</p>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">
                    <a href="{{ url('/register') }}"><button class="btn btn-warning col-md-4 welcomeScreenButton" >Get Started</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
   
    <main class="d-flex justify-content-center mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mt-3">
            <div class="row d-flex justify-content-center align-items-center">
              <i class="fa fa-envelope fa-3x"></i>
            </div>
            <div class="row d-flex justify-content-center align-items-center text-center">
              <p style="font-size: 26px;">Online Invitation</p>
              <div class="row d-flex justify-content-center">
                <div class="col-8">
                  <p style="font-size: 16px;">Sending the invitation card to multiple guests with one click.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="row d-flex justify-content-center align-items-center">
              <i class="fa fa-group fa-3x"></i>
            </div>
            <div class="row d-flex justify-content-center align-items-center text-center">
              <p style="font-size: 26px;">Easy manage Guest List</p>
              <div class="row d-flex justify-content-center">
                <div class="col-8">
                  <p style="font-size: 16px;">Categorizing the guests into different lists for efficient management.</p>
                </div>
              </div>  
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="row d-flex justify-content-center align-items-center">
              <i class="fa fa-calendar fa-3x"></i>
              </div>
            <div class="row d-flex justify-content-center align-items-center text-center">
              <p style="font-size: 26px;">Easy to plan an Event</p>
              <div class="row d-flex justify-content-center">
                <div class="col-8">
                  <p style="font-size: 16px;">Advanced features for event management.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="text-center">
      <div class="container">
        <div class="row mt-5 mb-5 d-flex justify-content-around">
          <a href="mailto:kaixianp@gmail.com"><i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i></a>
          <a href="https://www.facebook.com/kaixian9811/"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/kaixian_1126/"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
        </div>
        <div class="col pb-2">
          <p>Copyright &copy Alpha Event 2020</p>
        </div>
      </div>
    </footer>
  <body>

     
@endsection