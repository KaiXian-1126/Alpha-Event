<!-- This is the layout for page that has login and register -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- -external css -->
    <link href="css/style_sw.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    
    <title>Alpha Event</title>
  </head>
  <body>
    <!-- Start of header -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{url('/home')}}">{{ config('app.name', 'Alpha Event') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            @if (Auth::guest())
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>  
                </ul>
            </div>
            @else
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <div class="dropdown">
                    <!-- user profile -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="profile-ava">
                            <img alt="" src="image/avatar1_small.jpg">
                        </span>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-wide" role="menu">
                        <li class="dropdown-item">                            
                            <a href="/gamification/gamification_profile" >My Profile</a>                  
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="dropdown-item">                            
                            <a href="/gamification/challenge">Challenge</a>                  
                        </li>
                        <li class="dropdown-item">                            
                            <a href="/gamification/achievement" >Achievement</a>                  
                        </li>
                        <li class="dropdown-item">                   
                            <a href="/gamification/ranking_dashboard" >Ranking</a>                  
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="dropdown-item">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @endif
        </div>
    </nav>
    <!-- End of header -->

    <!-- Start of sidebar -->
    <div class="container-fluid">
        <div class="row mt-2">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="card" style="width: 12.5rem;">
              <ul class="list-group list-group-flush" >
                <li class="list-group-item list-group-item-action"><a href="/events/event_details/event_detail/{{$id}}">Event</a></li>
                
                <li class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseOne" 
                      aria-expanded="true" aria-controls="collapseOne">  <a href="#">Guests</a>
                  </li>
                        <!-- Here List of Guests -->
                        <div class="givestyle" style="padding-left: 30px;">
                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                            <li class="list-group-item list-group-item-action border-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <a href="/events/guests/all_guest_list/{{$id}}">All Guests</a>
                            </li>
                            <li class="list-group-item list-group-item-action border-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <a href="/events/guests/guest_list/{{$id}}">Guest List</a>
                            </li>
                          </div>
                        </div>
                    
                    <li class="list-group-item list-group-item-action"><a href="/events/todo_list/all_todo_list/{{$id}}"> To-do List<a>
                  <li class="list-group-item list-group-item-action"><a href="/events/budget/budget_list/{{$id}}">Budget</a></li>
                  <li class="list-group-item list-group-item-action"><a href="/events/invitation/edit_invitation/{{$id}}">Create invitation card</a></li>
    
                 
                
              </ul>
            </div>
      
        </nav>
        <!-- End of sidebar -->

      
        
              
            @yield('content')

            <script src="//cdn.ckeditor.com/4.15.1/basic/ckeditor.js"></script>
            <script>
            CKEDITOR.replace( 'summary-ckeditor' );
            </script>
     
        
    </div></div>
  </body>
</html>