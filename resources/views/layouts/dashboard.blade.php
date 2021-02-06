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
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <title>Alpha Event</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/home')}}">{{ config('app.name', 'Alpha Event') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if (Auth::guest())
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin: auto 10px;">
                    <a class="nav-link" href="{{ url('/login') }}" >Login</a>
                    </li>
                    <li class="nav-item" style="margin: auto 10px;">
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
                    <ul class="dropdown-menu dropdown-menu-wide" role="menu">
                        <li>                            
                            <a href="/gamification/gamification_profile" ><p class="text-dark">My Profile</p></p></a>                  
                        </li>
                        <div class="dropdown-divider" style="border-color: #a4a4a4"></div>
                        <li>                            
                            <a href="/invitation/view_invitation" ><p class="text-dark">Invitation</p></a>                  
                        </li>
                        <div class="dropdown-divider" style="border-color: #a4a4a4"></div>
                        <li>                            
                            <a href="/gamification/challenge"><p class="text-dark">Challenge</p></a>                  
                        </li>
                        <li>                            
                            <a href="/gamification/achievement" ><p class="text-dark">Achievement</p></a>                  
                        </li>
                        <li>                   
                            <a href="/gamification/ranking_dashboard" ><p class="text-dark">Ranking</p></a>                  
                        </li>
                        <div class="dropdown-divider" style="border-color: #a4a4a4"></div>
                        <li>
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
      <div class="mt-5 mb-5"></div>
      <!-- put yield here-->
      @yield('content')
  </body>
</html>