@extends('layouts.app')

@section('content')
<h1 class="sitetitle">Admin Dashboard</h1><br>
<div class="contactmainflex">

    @foreach($users as $user)
    <div class="contactfield">
        <img class="contactimage" src="/img/avatars/{{ $user->avatar }}">
        <div class="contactinfo">
            <h4 style="margin: 0;">{{ $user->name }}</h4><br>
            {{ $user->email }}<br>
            {{ $user->title }}<br>
            {{ $user->description }}<br>
            <h4>{{ $user->available_or_not }}</h4>
        </div>
    </div>
    @endforeach

</div>
@endsection
