<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TodoList</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     <link href={{asset('navbar/_bootswatch.scss')}} rel="stylesheet">
     <link href={{asset('navbar/_variables.scss')}} rel="stylesheet">
     <link href={{asset('navbar/bootstrap.css')}} rel="stylesheet">
     <link href={{asset('navbar/bootstrap.min.css')}} rel="stylesheet">
     <link href={{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
     <link href={{asset('assets/vendor/icofont/icofont.min.css')}} rel="stylesheet">
     <link href={{asset('assets/vendor/remixicon/remixicon.css')}} rel="stylesheet">
     <link href={{asset('assets/vendor/boxicons/css/boxicons.min.css')}} rel="stylesheet">
     <link href={{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}} rel="stylesheet">
     <link href={{asset('navbar/bootstrap.css')}} rel="stylesheet">
     <link href={{asset('assets/vendor/venobox/venobox.css')}} rel="stylesheet">
     <link href={{asset('assets/vendor/aos/aos.css')}} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


    <!-- Icons font CSS-->
<link href={{asset('login&registerstyle/vendor/mdi-font/css/material-design-iconic-font.min.css')}} rel="stylesheet">
    <link href={{asset('login&registerstyle/vendor/font-awesome-4.7/css/font-awesome.min.css')}} rel="stylesheet">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href={{asset('login&registerstyle/vendor/select2/select2.min.css')}} rel="stylesheet" media="all">
    <link href={{asset('login&registerstyle/vendor/datepicker/daterangepicker.css')}} rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href={{asset('login&registerstyle/css/main.css')}} rel="stylesheet" media="all">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="/">
                    TodoList
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('todo.show.showtodo')}}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('todo.todo.addtodolist')}}">Create Todo</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" href="{{route('todo.profile.profile')}}">Profile</a>
                            </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                   
                           
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                              
                           

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('include.error')
            @yield('content')
        </main>
    </div>


    <script src={{asset('assets/vendor/jquery/jquery.min.js')}}></script>
  <script src={{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
  <script src={{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}></script>
  <script src={{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}></script>
  <script src={{asset('assets/vendor/counterup/counterup.min.js')}}></script>
  <script src={{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}></script>
  <script src={{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}></script>
  <script src={{asset('assets/vendor/venobox/venobox.min.js')}}></script>
  <script src={{asset('assets/vendor/aos/aos.js')}}></script>

  <!-- Template Main JS File -->
  <script src={{asset('assets/js/main.js')}}></script>
</body>
</html>
