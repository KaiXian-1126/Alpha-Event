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
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
  </head>
  <body style="background-color: #d2d2f3">
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">{{ config('app.name', 'Alpha Event') }}</a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
    <div class="mt-2 mb-2" style="height:50px"></div>
    <!-- end Nav -->
    @yield('content')
    