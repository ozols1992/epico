@extends('layouts.app')

@section('content')
<div class="accounttop1">    
    <img class="toplogo" src="img/For_dark_&_red_background.png" alt=""/>    
</div>
<div class="accounttop2"></div>

<div class="panel-body">
    <h1 class="registertitle">LOG IN<span class="dot">.</span></h1>
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-mail address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <span class="fa fa-chevron-right"></span>
                </button>

                <a class="forgotpass" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
        </div>

        <div class="form-group">
            <div class="registerseperate">
                <div class="line"></div>
                <h3 class="or">Or log in with</h3>
                <div class="line"></div>
            </div>            
            <div class="col-md-8 col-md-offset-2">
                <a href="{{ url('login/linkedin') }}" class="linkedin2"><i class="fa fa-linkedin"></i>Log in with LinkedIn<i class="balance"></i></a>
            </div>
        </div>

    </form>
</div>
@endsection
