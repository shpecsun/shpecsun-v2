@extends('layouts.app')

@section('bodyTag','profile-page')
@section('title', 'Profile')

@section('content')
<div class="page-header header-filter" data-parallax="active" style="background-image: url('http://i.imgur.com/Bx0aP4q.jpg?1');"></div>
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-3 col-md-4 main main-raised ">
    <div class="profile-content">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
               <div class="profile">
                    <div class="avatar">
                        <img src="{{ asset('images/'.Auth::user()->profile()->source) }}" alt="Circle Image" class="img-circle img-responsive img-raised">
                        <button class="btn btn-fab btn-primary badge" data-toggle="tooltip" data-placement="right" title="" data-container="body" data-original-title="Recognized Member">
                            <shpe class="logo-shpe"></shpe>
                        </button>
                        </img>
                    </div>
                    <div class="name">
                        <h3 class="title">{{Auth::user()->name}}</h3>
                        <h6>President - SHPE CSUN</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 ">
                <div class="description">
                    <p>I currently study Electrical Engineering at California State University Northrdige this year I was given the honer of being the SHPE CSUN president. I look foward to continue to grow our chapter.</p>
                </div>
                {{-- <h4 class="title">Interest</h4>
                <span class="label label-primary">SkyWorks</span>
                <span class="label label-rose">Gaming</span>
                <span class="label label-info">Some Random Shit</span>
                <span class="label label-success">Some Random Shit</span> --}}
            </div>
        </div>
        <br>
    </div>
</div>

<div class="main main-lower col-md-6">
    <h2 class="title">Account Info</h2>
        <div class="col-md-5 col-md-offset-2">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating">
                <label class="control-label">Name</label>
                <input id="name" type="text" class="form-control" name="name"  value="{{ Auth::user()->name }}">
            </div>
            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
            <div class="form-group label-floating">
                <label class="control-label">Major</label>
                <input id="major" type="text" class="form-control" name="major"  value="">
            </div>
            <div class="label-floating is-empty">
                <label class="control-label"> Tell us a little about yourself</label>
                <textarea class="form-control" rows="3"></textarea>
                <span class="material-input"></span>
            </div>
    </div>

</div>
</div>
@endsection