@extends('layouts.app')

@section('content')
<div class="accounttop1">
    <img class="toplogo" src="img/For_dark_&_red_background.png" alt=""/>
</div>
<div class="accounttop2"></div>

<div class="panel-body">
    <h1 class="registertitle">UPDATE PROFILE<span class="dot">.</span></h1>
    <form class="form-horizontal" method="POST" action="{!! url('/editUser'); !!}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name or old('name') }}"></input>
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-mail address</label>

            <div class="col-md-6">
                <input id="name" type="email" class="form-control" name="email" value="{{ $user->email or old('email') }}"></input>
            </div>
        </div>

        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title" class="col-md-4 control-label">Job title</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" value="{{ $user->title or old('title') }}"></input>
            </div>
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description" class="col-md-4 control-label">About you</label>

            <div class="col-md-6">
                <textarea id="description" type="text" class="form-control" name="description" cols="50" rows="3">{{ $user->description or old('description') }}</textarea>
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
                    <input id="type2" type="radio" class="form-control" name="type" value="Job seeker">
                    <label for="type2">Job seeker</label>
                    <div class="check"></div>
                </div>
            </div>
        </div>

        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <label for="country" class="col-md-4 control-label">Country</label>

            <div class="col-md-6">
                <input id="country" type="text" class="form-control" name="country" value="{{ $user->country or old('country') }}"></input>
            </div>
        </div>

        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city" class="col-md-4 control-label">City</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control" name="city" value="{{ $user->city or old('city') }}"></input>
            </div>
        </div>

        <div class="form-group{{ $errors->has('phone_nr') ? ' has-error' : '' }}">
            <label for="phone_nr" class="col-md-4 control-label">Phone nr.</label>

            <div class="col-md-6">
                <input id="phone_nr" type="text" class="form-control" name="phone_nr" value="{{ $user->phone_nr or old('phone_nr') }}"></input>
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
                <a class="cancel" href='{!! url('/profile'); !!}'>Cancel</a>
            </div>
        </div>

    </form>
</div>
@endsection
