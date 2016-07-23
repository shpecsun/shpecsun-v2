@extends('layouts.app')

@section('content')
    <div class="page-header header-filter" filter-color="red" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="card card-signup">
                        <h2 class="card-title text-center">Register</h2>
                        <div class="row">
                        
                            <div class="col-md-3 col-md-offset-1">
                                <div class="info info-horizontal">
                                    <div class="icon icon-rose">
                                        <i class="material-icons">timeline</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Marketing</h4>
                                        <p class="description">
                                            We've created the marketing campaign of the website. It was a very interesting collaboration.
                                        </p>
                                    </div>
                                </div>

                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">code</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Fully Coded in HTML5</h4>
                                        <p class="description">
                                            We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                        </p>
                                    </div>
                                </div>

                                <div class="info info-horizontal">
                                    <div class="icon icon-info">
                                        <i class="material-icons">group</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Built Audience</h4>
                                        <p class="description">
                                            There is also a Fully Customizable CMS Admin Dashboard for this product.
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
                                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} label-floating">
                                                <label class="control-label">First Name</label>
                                                <input id="name" type="text" class="form-control" name="first_name"  value="{{ old('first_name') }}">
                                            </div>
                                            @if ($errors->has('first_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} label-floating">
                                                <label class="control-label">Last Name</label>
                                                <input id="name" type="text" class="form-control" name="last_name"  value="{{ old('last_name') }}">
                                            </div>
                                            @if ($errors->has('last_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
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
