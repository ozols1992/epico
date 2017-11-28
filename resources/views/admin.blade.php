@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">Admin Dashboard</div>
                @foreach($users as $user)
                  <img src="/img/avatars/{{ $user->avatar }}" style=" height: 100px; width: 100px;">
                  <h4 style="margin: 0;">{{ $user->name }}</h4><br>
                  {{ $user->email }}<br>
                  {{ $user->title }}<br>
                  {{ $user->description }}<br>
                  <h4>{{ $user->available_or_not }}</h4><br><br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
