@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::check())

    @foreach ($xml->NewsAll->News  as $news)

      <h3>{{ $news->attributes()->headline }}</h3>
      <h4>{{ $news->attributes()->contactEmail }}</h4>
      <h4>{{ $news->attributes()->publishDate }}</h4>
      <div>{{ $news->div->div->div->div->asXML() }}</div><br>


    @endforeach

    <h2>Welcome to EPICO</h2>
    @else
    <div class="starttop">
        <img class="startlogo" src="img/For_dark_&_red_background.png" alt=""/>

            <a class="startlogin" href="/register">Register</a>
            <a class="startlogin" href="/login">Sign in</a>

    </div>
    <div class="startmid">
        <span class="fa fa-chevron-down"></span>
    </div>
    <div class="startbottom">
        <a href="{{ url('login/linkedin') }}" class="linkedin"><i class="fa fa-linkedin"></i>Sign in with LinkedIn<i class="balance"></i></a>
    </div>
    @endif
</div>
@endsection
