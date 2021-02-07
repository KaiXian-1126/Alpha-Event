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

        <script src="https://kit.fontawesome.com/d9785b943a.js"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}">

        <!-- -external css -->
        <link rel="stylesheet" href="{{ URL::asset('css/style_event.css') }}" />
        
        <title>Alpha Event</title>
    </head>
    <body>
        <!-- Start of header -->
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{url('/home')}}">{{ config('app.name', 'Alpha Event') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                @if (Auth::guest())
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav my-nav">
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
                        <a style="color: white;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-wide my-nav" role="menu">
                            <li class="dropdown-item">                            
                                <a href="/gamification/gamification_profile" ><p class="text-dark">My Profile</p></a>                  
                            </li>
                            <div class="dropdown-divider" style="border-color: #a4a4a4"></div>
                            <li class="dropdown-item">                             
                                <a href="/invitation/view_invitation" ><p class="text-dark">Invitation</p></a>                  
                            </li>
                            <div class="dropdown-divider" style="border-color: #a4a4a4"></div>
                            <li class="dropdown-item">                            
                                <a href="/gamification/challenge"><p class="text-dark">Challenge</p></a>                  
                            </li>
                            <li class="dropdown-item">                            
                                <a href="/gamification/achievement" ><p class="text-dark">Achievement</p></a>                  
                            </li>
                            <li class="dropdown-item">                   
                                <a href="/gamification/ranking_dashboard" ><p class="text-dark">Ranking</p></a>                  
                            </li>
                            <div class="dropdown-divider" style="border-color: #a4a4a4"></div>
                            <li class="dropdown-item">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <p class="text-dark">Logout</p>
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
        <div class="mt-5 mb-5" ></div>
        <!-- End of header -->
        <!-- Start of sidebar -->
        <main>
            <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col-md-3">
                        <nav class="sidebar d-none d-xl-block mt-2">
                            <ul>
                                <li><a href="/events/event_details/event_detail/{{$id}}">Event</a></li>
                                <li><a href="#" class="feat-btn">Guest
                                    <span class="fas fa-caret-down first"></span>
                                    </a>
                                    <ul class="feat-show">
                                        <li><a href="/events/guests/all_guest_list/{{$id}}">All Guest List</a></li>
                                        <li><a href="/events/guests/guest_list/{{$id}}">Guest List</a></li>
                                    </ul>
                                </li>
                                <li><a href="/events/todo_list/all_todo_list/{{$id}}">To-do List</a></li>
                                <li><a href="/events/budget/budget_list/{{$id}}">Budget</a></li>
                                <li><a href="/events/invitation/edit_invitation/{{$id}}">Create Invitation</a></li>
                            </ul>
                        </nav>
                        <nav id="collapsibleNavbar" class="mt-5 mb-4" style="display: none;">
                            <ul class="list-group list-group-flush d-block d-sm-none"  >
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
                        </nav>
                    </div>
                    
                    @yield('content')
                    
                </div>
            </div>
        </main>
            <script src="//cdn.ckeditor.com/4.15.1/basic/ckeditor.js"></script>
            <script>
            CKEDITOR.replace( 'summary-ckeditor' );
            $('.feat-btn').click(function(){
               $('nav ul .feat-show').toggleClass("show");
               $('nav ul .first').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
               $('nav ul li ul li').removeClass("active");
               $(this).addClass("active").siblings().removeClass("active");
           });
            </script>
    </body>
</html>
