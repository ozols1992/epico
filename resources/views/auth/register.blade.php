@extends('layouts.app')

@section('content')
<div class="accounttop1">    
    <img class="toplogo" src="img/For_dark_&_red_background.png" alt=""/>    
</div>
<div class="accounttop2"></div>

<div class="panel-body">
    <h1 class="registertitle">REGISTER<span class="dot">.</span></h1>
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label" >Name</label>

            <div class="col-md-6">

                @if(!empty($name))
                <input id="name" type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ $name }}" required autofocus>
                @else
                <input id="name" type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name') }}" required autofocus>
                @endif

                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-mail address</label>

            <div class="col-md-6">

                @if(!empty($email))
                <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ $email }}" required>
                @else
                <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                @endif

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
                <input id="password" type="password" class="form-control" placeholder="Create password" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirm password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" placeholder="Repeat password" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title" class="col-md-4 control-label">Job title</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" placeholder="Enter your job title" value="{{ old('title') }}" required autofocus>

                @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label for="type" class="col-md-4 control-label">Select user type</label>

            <div class="radiosection">
                <div class="hoversection">
                    <input id="type1" type="radio" class="form-control" name="type" value="Freelancer">
                    <label for="type1">Freelancer</label>
                    <div class="check"></div>
                </div>
                <div class="hoversection">
                    <input id="type2" type="radio" class="form-control" name="type" value="Job_seeker">
                    <label for="type2">Job seeker</label>
                    <div class="check"></div>
                </div>
            </div>
        </div>

        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <label for="country" class="col-md-4 control-label">Country</label>

            <div class="col-md-6">
                <input id="country" type="text" class="form-control" name="country" placeholder="Enter your country" value="{{ old('country') }}" required autofocus>

                @if ($errors->has('country'))
                <span class="help-block">
                    <strong>{{ $errors->first('country') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city" class="col-md-4 control-label">City</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control" name="city" placeholder="Enter your city" value="{{ old('city') }}" required autofocus>

                @if ($errors->has('city'))
                <span class="help-block">
                    <strong>{{ $errors->first('city') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('phone_nr') ? ' has-error' : '' }}">
            <label for="phone_nr" class="col-md-4 control-label">Phone nr.</label>

            <div class="col-md-6">
                <input id="phone_nr" type="text" class="form-control" name="phone_nr" placeholder="Enter your phone nr." value="{{ old('phone_nr') }}" required autofocus>

                @if ($errors->has('phone_nr'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone_nr') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="available_or_not" class="col-md-4 control-label">Are you available for a new project?</label>

            <div class="radiosection">
                <div class="hoversection">
                    <input id="available_or_not1" type="radio" class="form-control" name="available_or_not" value="Available">
                    <label for="available_or_not1">Available</label>
                    <div class="check"></div>
                </div>
                <div class="hoversection">
                    <input id="available_or_not2" type="radio" class="form-control" name="available_or_not" value="Not available">
                    <label for="available_or_not2">Not available</label>
                    <div class="check"></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <span class="fa fa-chevron-right"></span>
                </button>
            </div>
        </div>

        <div class="form-group">
            <div class="registerseperate">
                <div class="line"></div>
                <h3 class="or">Or register with</h3>
                <div class="line"></div>
            </div>            
            <div class="col-md-8 col-md-offset-2">
                <a href="{{ url('login/linkedin') }}" class="linkedin2"><i class="fa fa-linkedin"></i>Register with LinkedIn<i class="balance"></i></a>
            </div>
        </div>

    </form>
</div>
@endsection
