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
    <link href="css/material-kit.css" rel="stylesheet"/>
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
                <a href="https://twitter.com/shpe_csun">
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
            <li class="dropdown">
                @if (Auth::guest())
                <a href="" class="profile-photo dropdown-toggle" data-toggle="dropdown">
               <div class="profile-photo-small">
                    <img src="http://i.imgur.com/jlAhVyz.jpg" alt="Circle Image" class="img-circle img-responsive"></img>
                </div>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('/profile')}}">Profile</a></li>
                </ul>
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
<body @yield('bodyTag')>
    @yield('content')
</body>
<footer class="footer footer-light-grey footer-big">
    <div class="container">

        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
              
                </div>

                <div class="col-md-4">
                    <h5>Social Feed</h5>
                </div>

                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="social-buttons">
                        <li>
                            <a href="https://twitter.com/shpe_csun" class="btn btn-just-icon btn-simple btn-twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/shpecsun" class="btn btn-just-icon btn-simple btn-facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/shpecsun" class="btn btn-just-icon btn-simple btn-instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <hr>

        <ul class="pull-left">
            <li>
                <a href="#pablo">
                   Blog
                </a>
            </li>
            <li>
                <a href="#pablo">
                    Presentation
                </a>
            </li>
            <li>
                <a href="#pablo">
                   Discover
                </a>
            </li>
            <li>
                <a href="#pablo">
                    Payment
                </a>
            </li>
            <li>
                <a href="#pablo">
                    Contact Us
                </a>
            </li>
        </ul>

        <div class="copyright pull-right">
            Society of Hispanic Proffesional Egni All Rights Reserved.
        </div>
    </div>
</footer>

<!--   Core JS Files   -->
    <script src="js/theme.js" type="text/javascript"></script>
    <!-- Plugin For Google Maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

</html>
