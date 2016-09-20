@extends('layouts.app')

@section('footer','footer-black')

@section('content')

<div class="page-header header-filter" style="background-image: url({{ asset('images/login-banner.jpg') }}); background-size: cover; background-position: top center;">
    <div class="cover gradient" data-color="gradient"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                   <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                        <div class="header header-black text-center">
                            <h4 class="card-title">Log in</h4>
                        </div>
                        <div class="content">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email..." value="{{ old('email') }}">
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
                                    <input type="password" name="password" id="password" placeholder="Password..." class="form-control" />
                                </div>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me</label>
                            </div>
                        <div class="footer">
                            <button class="btn btn-primary btn-simple btn-wd btn-lg" type="submit">Log In</button>
                            <a href="{{ url('/password/reset') }}" class="btn btn-primary btn-simple btn-wd btn-lg">Forgot Password</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
