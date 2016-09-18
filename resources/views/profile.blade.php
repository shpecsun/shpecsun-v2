@extends('layouts.app')

@section('bodyTag','class="profile-page"')
@section('title', 'Profile')

@section('content')
<div class="page-header header-filter" data-parallax="active" style="background-image: url('http://i.imgur.com/Bx0aP4q.jpg?1');"></div>
<div class="row">
<div class="main main-raised col-md-4">
    <div class="profile-content">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
               <div class="profile">
                    <div class="avatar">
                        <img src="http://i.imgur.com/jlAhVyz.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
                        <button class="btn btn-fab btn-primary badge" data-toggle="tooltip" data-placement="right" title="" data-container="body" data-original-title="Recognized Member">
                            <shpe class="logo-shpe"></shpe>
                        </button>
                        </img>
                    </div>
                    <div class="name">
                        <h3 class="title">Adam Staffero</h3>
                        <h6>President - SHPE CSUN</h6>
                        <a href="#pablo" class="btn btn-just-icon btn-simple" style="color:#3EB890"><i class="fa fa-slack"></i></a>
                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-linkedin"></i></a>
                        <a href="#pablo" class="btn btn-just-icon btn-simple" style="color:purple" ><i class="fa fa-instagram"></i></a>
                        <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 ">
                <div class="description">
                    <p>I currently study Electrical Engineering at California State University Northrdige this year I was given the honer of being the SHPE CSUN president. I look foward to continue to grow our chapter.</p>
                </div>
                <h4 class="title">Quick Facts</h4>
                <ul class="list-unstyled ">
                    <li><b>Major:</b> Electrical Engineering</li>
                    <li><b>Ethnicity:</b> White</li>
                    <li><b>Favorite Food:</b> Spagheti cause....</li>
                    <li><b>Height:</b> Short... shall we say more</li>
                </ul>
                <br>
                <h4 class="title">Experience</h4>
                <p class="description">He currently interns at Skyworks.</p>
                <br>
                <h4 class="title">Interest</h4>
                <span class="label label-primary">SkyWorks</span>
                <span class="label label-rose">Gaming</span>
                <span class="label label-info">Some Random Shit</span>
                <span class="label label-success">Some Random Shit</span>
            </div>
        </div>
        <br>
    </div>
</div>

<div class="main main-lower col-md-7">
<h2 class="title">Account Info</h2>
</div>
</div>
@endsection