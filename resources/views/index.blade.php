@extends('layouts.app')

@section('title', 'Society of Hispanic Professioanl Engineers CSUN')

{{-- @section('notification')
<div class="alert alert-danger">
     <div class="container">
         <div class="alert-icon">
            <i class="material-icons">access_time</i>
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
        </button>
         <b>Upcoming Meeting!</b> We are meeting today at 7:00 PM @ the USU.
    </div>
</div>
@endsection --}}

@section('content')
<div class="page-header header-filter" data-parallax="active" style="background-image: {{ asset('/images/banner.png') }}; z-index: -1;">
    <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
            <source src="video/shpecsun.webm" type="video/webm">
            <source src="video/shpecsun.mp4" type="video/mp4">
            Video not supported
        </video>
    <div class="cover gradient" data-color="gradient"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <img src="{{ asset('images/branding.png') }}" class="img-responsive" alt="">
                <h1 class="signature">CHANGING THE WORLD</h1>
                <h4></h4>
            </div>
        </div>
    </div>
    <div class="header subscribe-line-black hidden-xs col-sm-12" style="">  
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <h2 class="page-heade title text-center">SUBSCRIBE TO OUR NEWSLETTER</h2>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <a href="{{ url('subscribe') }}" class="btn btn-danger btn-fill" style="margin-top:25px;width:100%;">Subscribe Here</a>
            </div>
        </div>
    </div>
</div>


<div class="main main-raised">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title">We Set the Bar of Success!</h2>
                    <h5 class="description">SHPE CSUN is a part of a nationally recognized professional society that provides an environment which fosters familia , academia, and professionalism. Through the help of a strong social network, diverse interdisciplinary membership, and industry leading alumni support, our members are empowered to achieve greatness through all facets of their lives.</h5>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Our foundational pillars</h2> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info info-horizontal">
                        <div class="icon icon-danger">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Chapter Development</h4>
                            <p>We are devoted to creating a foundation that is reinforced by long term-relationships, accountability and team bonding. In our organization, dedicated members are pivotal to the success of SHPE CSUN. Dynamic and diverse membership is foremost, where the connection between personal life and academics is bridged. SHPE CSUN’s chapter development is engineered with a sense of familia.</p>
                        </div>
                    </div>

                    <div class="info info-horizontal">
                        <div class="icon icon-info">
                            <i class="material-icons">school</i>
                        </div>
                      <div class="description">
                            <h4 class="info-title">Academics</h4>
                            <p>Together we strive to compile a learning program that incentivizes academic improvement and performance. Providing a modular network of study groups, peer support, and academic workshops. Academic greatness is ensured via club resources and commitment to each other.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card card-plain card-showcase">
                    <div class="card-image">
                        <img class="img-responsive" src="{{ asset('/images/shpenila2015.jpg') }}">
                    <div class="ripple-container"></div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="info info-horizontal">
                        <div class="icon icon-purple">
                            <i class="material-icons">work</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Leadership & Professional Development</h4>
                            <p>Our members are provided opportunities and structured workshops yielding strong leadership skills, thus translating into greater career advancement. By utilizing industry leading alumni, members leading by example, and the ability to climb SHPE CSUN’s organizational ladder; our leadership development is the very best CSUN has to offer. In addition SHPE CSUN commits to set up an array of workshops and conferences developing interpersonal skills. Through active networking, we strive to encourage our members to form a rapport with professionals, making the transition from college to industry.</p>
                        </div>
                    </div>
                     <div class="info info-horizontal">
                        <div class="icon icon-success">
                            <i class="material-icons">public</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Community Outreach</h4>
                            <p>SHPE CSUN as an organization is committed to changing young lives in the Southern California Area through STEM oriented community programs. As role models in our communities, we aim to inspire and mold future leaders. Through the use of awareness and dismantling stigmas, we see STEM as gateway to an attainable future; free of negative socio-economic factors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@if($instaPost)
    <div class="section-gray">
        <div class="cards">
            <div class="container">
                <div class="title">
                    <h2 class="category-social">
                        <i class="fa fa-instagram"></i> Instagram Feed
                    </h2>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                   <div class="col-md-6">
                        <div class="card">
                            <div class="card-image">
                                <img class="img" src="{{ $instaPost[0]['images']['standard_resolution']['url'] }}" />
                            </div>
                            <div class="content">
                                <h6 class="category text-danger">
                                    <i class="material-icons">access_time</i> Latest Post - {{$instaPost[0]['caption']['created_time']}}
                                </h6>
                                <p class="card-description">
                                    {{ $instaPost[0]['caption']['text']}}
                                </p>
                                <div class="footer">
                                    <div class="author">
                                        <a href="https://www.instagram.com/{{$instaPost[0]['user']['username']}}">
                                           <img src="{{ $instaPost[0]['user']['profile_picture']}}" alt="..." class="avatar img-raised">
                                           <span>{{ $instaPost[0]['user']['full_name']}}</span>
                                        </a>
                                    </div>
                                   <div class="stats"><a href="{{$instaPost[0]['link']}}">
                                        <i class="material-icons">favorite</i> {{$instaPost[0]['likes']['count'] }} &middot;
                                        <i class="material-icons">chat_bubble</i> {{$instaPost[0]['comments']['count']}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                   </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="card">
                            <div class="card-image" style="height:250px">
                                    <img class="img media-cover" src="{{ $instaPost[1]['images']['standard_resolution']['url'] }}" />
                                    <div class="card-title">{{$instaPost[1]['caption']['created_time']}}</div>
                            </div>
                            <div class="content">
                                <div class="footer">
                                    <div class="author">
                                        <a href="https://www.instagram.com/{{$instaPost[0]['user']['username']}}">
                                           <img src="{{ $instaPost[1]['user']['profile_picture']}}" alt="..." class="avatar img-raised">
                                           <span>{{ $instaPost[1]['user']['full_name']}}</span>
                                        </a>                                    </div>
                                   <div class="stats">
                                   <a href="{{$instaPost[1]['link']}}">
                                        <i class="material-icons">favorite</i> {{$instaPost[1]['likes']['count'] }} &middot;
                                        <i class="material-icons">chat_bubble</i> {{$instaPost[1]['comments']['count']}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="card">
                            <div class="card-image" style="height:250px">
                                    <img class="img media-cover" src="{{ $instaPost[2]['images']['standard_resolution']['url'] }}" />
                                    <div class="card-title">{{$instaPost[2]['caption']['created_time']}}</div>
                            </div>
                            <div class="content">
                                <div class="footer">
                                    <div class="author">
                                        <a href="https://www.instagram.com/{{$instaPost[0]['user']['username']}}">
                                           <img src="{{ $instaPost[2]['user']['profile_picture']}}" alt="..." class="avatar img-raised">
                                           <span>{{ $instaPost[2]['user']['full_name']}}</span>
                                        </a>                                    </div>
                                   <div class="stats">
                                   <a href="{{$instaPost[2]['link']}}">
                                        <i class="material-icons">favorite</i> {{$instaPost[2]['likes']['count'] }} &middot;
                                        <i class="material-icons">chat_bubble</i> {{$instaPost[2]['comments']['count']}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="alumni section-image" style="background-image: url(images/alumni.jpg)">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="title">Our Members Go Farther!</h2>
                <h5 class="description">SHPE CSUN member's begin their professional career with skills and knowledge to succeed in their given field.</h5>
            </div>
        </div>

        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-4">
                <div class="card card-testimonial">
                    <div class="icon">
                        <i class="material-icons">format_quote</i>
                    </div>
                    <div class="content">
                        <h5 class="card-description">
                                {{$blog->summary}}<br><a href="{{url('stories/'.$blog->slug)}}">Read More...</a>
                        </h5>
                    </div>

                    <div class="footer">
                        <h4 class="card-title">{{$blog->author}}</h4>
                        <h6 class="category">{{$blog->status}}<br><small>{{$blog->degree}}</small></h6>
                        <div class="card-avatar">
                            @if(str_contains($blog->author_image->source,'http'))
                                <img class="img" src="{{$blog->author_image->source}}">
                            @else
                                <img class="img" src="{{ asset("images/".$blog->author_image->source) }}">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

<div class="board-members section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="title">SHPE CSUN Board Members</h2>
             </div>
        </div>
        @foreach($members['board']->chunk(2) as $row)
            <div class="row">
            @foreach($row as $person)
                <div class="col-md-6">
                    <div class="card card-profile card-plain">
                        <div class="col-sm-5">
                            <div class="card-image">
                                <img class="img" src="{{ asset("/images/".$person->image->source) }}">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="content">
                                <h4 class="card-title">{{$person->display_name}}</h4>
                                <h6 class="category text-muted">{{$person->position_name}}</h6>
                                <h6 class="category text-muted">Studies {{$person->degree}}</h6>
                                <p class="card-description">{{$person->quote}}</p>
                                <div class="footer">
                                    <a href="mailto:{{$person->email}}" class="btn btn-just-icon btn-simple btn-primary"><i class="fa fa-envelope"></i></a>
                                    @foreach($person->links as $link)
                                        <a target="_blank" href="{{$link->link}}" class="btn btn-just-icon btn-simple btn-{{$link->type}}"><i class="fa {{$link->fa_icon}}"></i></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3 class="title">Chair Members</h3>
            </div>
        </div>
        <div class="row">
               @foreach($members['chair']->chunk(2) as $row)
                <div class="row">
                @foreach($row as $person)
                    <div class="col-sm-6">
                        <div class="card card-profile card-plain">
                            <div class="col-md-4 col-xs-8 col-xs-offset-2">
                                <div class="card-image">
                                <img class="img" src="{{ asset("/images/".$person->image->source) }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="content">
                                    <h4 class="card-title">{{$person->display_name}}</h4>
                                    <h6 class="category text-muted">{{$person->position_name}}</h6>
                                    <h6 class="category text-muted">Studies {{$person->degree}}</h6>

                                    <p class="card-description">{{$person->quote}}</p>

                                    <div class="footer">
                                    <a href="mailto:{{$person->email}}" class="btn btn-just-icon btn-simple btn-primary"><i class="fa fa-envelope"></i></a>
                                    @foreach($person->links as $link)
                                        <a target="_blank" href="{{$link->link}}" class="btn btn-just-icon btn-simple btn-{{$link->type}}"><i class="fa {{$link->fa_icon}}"></i></a>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach 
                </div>
            @endforeach
            </div>
    </div>
</div>


</div>
@endsection
