<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- public css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style_gamification.css') }}" />
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
                <ul class="navbar-nav my-nav">
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
      <div class="mt-3 mb-3" style="height: 50px"></div>
      <!-- put yield here-->
      @yield('content')
  </body>
</html>