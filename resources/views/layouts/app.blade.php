<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
{{--     <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Laravel</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="css/material-kit.css" rel="stylesheet"/>

</head>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">SHPE CSUN</a>
    </div>

    <div class="collapse navbar-collapse" id="mobile-nav">
      <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <a href="#pablo" class="profile-photo dropdown-toggle" data-toggle="dropdown">
                  <div class="navbar-text pull-left">{{ Auth::user()->name }}</div>
                   <div class="pull-right">
                       <div class="profile-photo-small">
                            <img src="img/faces/avatar.jpg" alt="Circle Image" class="img-circle img-responsive">
                        </div>
                    </div> 
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">
                        Dropdown header
                    </li>
                    <li>
                        <a href="#pablo">Me</a>
                    </li>
                    <li>
                        <a href="#pablo">Settings and other stuff</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}">Sign out</a></li>
                </ul>
                @endif
            </li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>

<body>
    @yield('content')
</body>

<!--   Core JS Files   -->
    <script src="js/theme.js" type="text/javascript"></script>
    <!-- Plugin For Google Maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

</html>
