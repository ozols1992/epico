@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())
            <h2>Welcome to EPICO</h2>
        @else
            <h3>You need to log in. <a href="/login">Click here to login</a></h3>
        @endif
    </div>
@endsection
