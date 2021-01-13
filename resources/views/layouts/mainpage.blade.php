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

    <title>Alpha Event</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">

            <a class="navbar-brand" href="{{url('/')}}">{{ config('app.name', 'Alpha Event') }}</a>
            <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="navbar-collapse collapse justify-content-center" id="middleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link " href="#">My Event</a>
                    </li>
                    <li class="nav-item" style="margin: auto 10px;">
                      <a class="nav-link" href="#">Public Events</a>
                    </li>
                      <li class="nav-item">
                      <a class="nav-link" href="#">Registered</a>
                    </li>
                  </ul>
                </div>

            <!-- right side of header -->
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
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <span class="profile-ava">
                          <img alt="" src="image/avatar1_small.jpg">
                      </span>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-wide" role="menu">
                      <li>                            
                          <a href="#">My Profile</a>                  
                      </li>
                      <li>
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
              <div>
          </div>
            @endif
                
        </div>
      </nav>

      <!-- put yield here-->
      @yield('content')
  </body>
</html>