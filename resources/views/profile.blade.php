@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())
            <img src="/img/avatars/{{ Auth::user()->avatar }}" style=" height: 150px; width: 150px;">
            <form enctype="multipart/form-data" action="/profile" method="post">
                <label>update profile picture</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
            <h2>{{ Auth::user()->name }}'s profile</h2><br>
            <h3>My title:</h3>
            <h5>{{ Auth::user()->title }}</h5>
            <h3>About me:</h3>
            <h5>{{ Auth::user()->description }}</h5>
            <h3>I'am:</h3>
            <h5>{{ Auth::user()->type }}</h5>
            <h3>Address:</h3>
            <h5>{{ Auth::user()->country }}</h5>
            <h5>{{ Auth::user()->city }}</h5>
            <h5>{{ Auth::user()->address }}</h5>
            <h5>{{ Auth::user()->zip_code }}</h5>
            <h3>Phone nr.</h3>
            <h5>{{ Auth::user()->phone_nr }}</h5>
            <h3>Current status</h3>
            <h5>{{ Auth::user()->available_or_not }}</h5>
            <button>
                <a href='{!! url('/editUser'); !!}'>Update my profile</a>
            </button>
        @else
            <h3>You need to log in. <a href="/login">Click here to login</a></h3>
        @endif
    </div>
@endsection
