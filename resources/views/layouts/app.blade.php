<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons|Lato:400,300,100italic,100,300italic,400italic,700,700italic,900,900italic|Oswald" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation-icons/3.0/foundation-icons.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">    

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fav/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('fav/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('fav/android-chrome-192x192.png')}}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{ asset('fav/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{ asset('fav/manifest.json')}}">
    <link rel="mask-icon" href="{{ asset('fav/safari-pinned-tab.svg')}}" color="#D00D2D">
    <link rel="shortcut icon" href="{{ asset('fav/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="{{ asset('fav/mstile-144x144.png')}}">
    <meta name="msapplication-config" content="{{ asset('fav/browserconfig.xml')}}">
    <meta name="theme-color" content="#000000">

    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet"/>
    @yield('notification')
</head>
<nav class="navbar navbar-transparent navbar-absolute">
  <div class="container">
    <div class="nav navbar-nav navbar-left">
      <div class="logo-container disabled">
        <a href="{{ url('/') }}">
            <div class="logo"><img src="{{ asset('images/branding.png') }}" class="img-responsive" alt=""></div>
        </a>
      </div>
    </div>

    <div class="collapse navbar-collapse" id="mobile-nav">
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="https://twitter.com/shpecsun">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/shpecsun">
                    <i class="fa fa-facebook-square"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/shpecsun">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
{{--             <li class="dropdown">
                @if (Auth::user())
                <a href="#pablo" class="profile-photo dropdown-toggle" data-toggle="dropdown">
                  <div class="navbar-text pull-left">{{ Auth::user()->first_name }}</div>
                   <div class="pull-right">
                       <div class="profile-photo-small">
                            <img src="" alt="Circle Image" class="img-circle img-responsive">
                        </div>
                    </div> 
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">
                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} 
                    </li>
                    <li>
                        <a href="#pablo">Profile</a>
                    </li>
                    <li>
                        <a href="#pablo">Settings and other stuff</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}">Sign out</a></li>
                </ul>
                @else
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">person</i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('/profile')}}">Profile</a></li>
                </ul>
                @endif
            </li> --}}
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>

<body @yield('bodyTag')>
    @yield('content')
</body>
<footer class="footer footer-light-grey footer-big">
    <div class="container">
        <ul class="pull-left">
            <li>
                <a href="#pablo">
                   Home
                </a>
            </li>
            <li>
                <a href="#pablo">
                    Contact Us
                </a>
            </li>
        </ul>

        <div class="copyright pull-right">
            &#169; {{date('Y')}} Society of Hispanic Professional Engineers - CSU, Northridge 
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
    <script src="{{asset('js/theme.js')}}" type="text/javascript"></script>
    <!-- Plugin For Google Maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

</html>
