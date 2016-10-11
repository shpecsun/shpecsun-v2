@extends('layouts.app')

@section('footer','footer-black')

@section('content')
    <div class="page-header header-filter" style="background-image: url({{ asset('images/login-banner.jpg') }}); background-size: cover; background-position: top center; height:100%;">
        <div class="cover gradient" data-color="gradient"></div>
            <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">Register</h2>
                        <div class="row">
                        
                            <div class="col-md-3 col-md-offset-1">
                                <div class="info info-horizontal">
                                    <div class="icon icon-success">
                                        <i class="material-icons">book</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Get Foward in School</h4>
                                        <p class="description">
                                            By joining you gain access to a support system built by students for students.
                                        </p>
                                    </div>
                                </div>

                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">group</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Network with Professionals</h4>
                                        <p class="description">
                                            Gain access to membership of the largest national Hispanic engineering society. Take part of SHPE Mentor and much more.
                                        </p>
                                    </div>
                                </div>

                                <div class="info info-horizontal">
                                    <div class="icon icon-info">
                                        <i class="material-icons">explore</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Explore Your Field</h4>
                                        <p class="description">
                                            Get access to exclusive tours and presentations presented by professionals in your field.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <form role="form" method="POST" action="{{ url('/register') }}">
                                    {{ csrf_field() }}
                                    <div class="content">

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} label-floating">
                                                <label class="control-label">Name</label>
                                                <input id="name" type="text" class="form-control" name="name"  value="{{ old('name') }}">
                                            </div>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} label-floating">
                                                <label class="control-label">Email</label>
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <input type="password" name="password" placeholder="Password..." class="form-control" />
                                            </div>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">fingerprint</i>
                                            </span>
                                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                <input type="password" id="password-confirm" name="password_confirmation" placeholder="Confirm Password..." class="form-control" />
                                            </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" checked>
                                                I agree to the <a href="#something">terms and conditions</a>.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button type="submit" class="btn btn-primary btn-round">Get Started</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
