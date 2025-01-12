<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title', 'Academic Services')</title>

    <!-- Scripts -->
    <!--
    <script src="{{ asset('js/app.js') }}" defer></script>
    -->
    <!-- Fonts -->
     <!--
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    -->
    <!-- Styles -->
     <!--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    -->     <script src="{{ asset('template/vendors/jquery/js/jquery.js') }}"
     crossorigin="anonymous"></script>
    <script src="{{ asset('template/vendors/toastr/js/toastr.min.js') }}"></script>



    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    <script src="{{ asset('template/js/stisla.js') }}"></script>
  
    <script src="{{ asset('template/custom/custom.js') }}"></script>
  

        <!-- General JS Scripts -->
        <script src="{{ asset('template/vendors/swal/js/sweetalert.js') }}"></script>
    <script src="{{ asset('template/vendors/popperjs/js/popper.js') }}"

        crossorigin="anonymous"></script>
    <script src="{{ asset('template/vendors/bootstrap-4/js/bootstrap.js') }}"
       
        crossorigin="anonymous"></script>
    <script src="{{ asset('template/vendors/jquery-nicescroll/js/jquery-nicescroll.js') }}"></script>
    <script src="{{ asset('template/vendors/momentjs/js/moment-2.29.3.min.js') }}"></script>
    <script src="{{ asset('template/vendors/datatable/js/datatables.min.js') }}"></script>
    <script src="{{ asset('template/vendors/reveal-password/js/show-hide-password.min.js') }}"></script>
   
    <link rel="stylesheet" href="{{ asset('template/vendors/bootstrap-4/css/bootstrap.css') }}" crossorigin="anonymous">

    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/components.css') }}" rel="stylesheet">
  
    <link href="{{ asset('template/custom/step.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/datatable/css/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/parsley/css/custom-parsley.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/toastr/css/iziToast.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/toastr/css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendors/fontawesome/css/fontawesome.css') }}" rel="stylesheet" crossorigin="anonymous">
    <script  src="{{ asset('template/vendors/fontawesome/js/fontawesome.js') }}" crossorigin="anonymous"></script>
    <!--
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    -->
    <!--BS Stepper--> 
    <link href="{{ asset('template/vendors/bs-stepper/css/bs-stepper.css') }}" rel="stylesheet">
    <script src = "{{ asset('template/vendors/bs-stepper/js/bs-stepper.js') }}"></script>
    <!--BS Stepper:end--> 
    <link href="{{ asset('template/custom/custom.css') }}" rel="stylesheet">
    <!--Qrious--> 
    <script src = "{{ asset('template/vendors/qrious/js/qrious.js') }}"></script>

    <!--Moment JS--> 
    <script src = "{{ asset('template/vendors/momentjs/js/moment-2.29.3.min.js') }}"></script>

    <!--Chart JS--> 
    <script src = "{{ asset('template/vendors/chartjs/js/chart.min.js') }}"></script>

    <!--Select2--> 
    <script src = "{{ asset('template/vendors/select2/js/select2.min.js') }}"></script>

    <!--Ripple JS--> 
    <link href="{{ asset('template/vendors/ripplejs/css/ripple.css') }}" rel="stylesheet">
    <script src = "{{ asset('template/vendors/ripplejs/js/ripple.js') }}"></script>
    <noscript>
  
     <meta HTTP-EQUIV="REFRESH" content="0; url= {{ URL::to('/') }}/noscript"> 
  </noscript>
</head>

    @if (Route::current()->getName() == 'guest' || Route::current()->getName() == 'guest2')

    <body class = "custom-bg">

    <div id="app">
    <div class="main-wrapper main-wrapper-1">
        <!------->
    <nav class="navbar-fixed main-navbar" id = 'guest_header1'>
    <section class="section shadow-none border-0">
        <div class="section-header  shadow-none border-0">
        <img src="{{ URL::to('/') }}/template/img/kiosk/icons/logo.png" alt="logo" width="70" class="shadow-light rounded-circle">
            <h1 class = "ml-2">Polytechnic University of the Philippines <br> Quezon City</h1>

        
        </div>
      
    </section>
    </nav>
    <nav class="navbar-expand-lg main-navbar" id = 'guest_header2' style='display:none;'>
    <section class="section shadow-none border-0">
        <div class="section-header shadow-none border-0">
        <img src="{{ URL::to('/') }}/template/img/kiosk/icons/logo.png" alt="logo" width="70" class="shadow-light rounded-circle">
            <h1 class = "ml-2">Academic Services</h1>

        
        </div>
      
    </section>
    </nav>
    @elseif (Route::current()->getName() != 'login' &&  Route::current()->getName() != 'register')
    <body class = "bg-gray">

    <div id="app">
    <div class="main-wrapper main-wrapper-1">
          <!------->
    <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar" id = "header">
                <!--
                <a class="navbar-brand" href="/">
                  Academic Services
                </a>
                -->
 

             
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
             
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- Left Side Of Navbar -->
                 
                    <form class="form-inline mr-auto">
                    @if(Auth::check())
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>

                   </ul>
                   @endif
                    </form>
                   

                  
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @guest
                        <li class="dropdown dropdown-list-toggle">
                            <a href="javascript:void(0);" 
                            onclick = "window.location.href = '/guest'"
                            role = "button" class="nav-link notification-toggle nav-link-lg beep">
                            <i class="fas fa-home"></i></a>

                        </li>

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        
                        @else
                        @if(Auth::check())

                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class = 'fa fa-user-circle'></i>
                                @if(isset(Auth::user()->client)) 
                                {{ Auth::user()->client->first_name}}
                                @else
                                {{ Auth::user()->email}} 
                                @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <!--<div class="dropdown-title">Logged in n min ago</div>-->
                                     <a class="dropdown-item" href="/profile"
                                       onclick="/profile">
                                       <i class="far fa-user"></i> Profile
                                    </a>
                                    <div class = "dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    

                                </div>
                            </li>
                        @endif
                        @endguest
                    </ul>
                </div>
    
        </nav>
@endif

@includeWhen(Auth::check() && (Route::current()->getName() != 'guest2' && Route::current()->getName() != 'guest'),'layouts.sidebar')

        <main class="py-4">
@if(Auth::check())
        <div class="main-content pt-1">
@endif
            @yield('content')
@if(Auth::check())
        </div>
@endif
        </main>

@includeWhen(Route::current()->getName() != 'login' &&  Route::current()->getName() != 'register','layouts.footer')

