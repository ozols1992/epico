@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::check())
    <h1 class="sitetitle">EPICO News</h1><br>
    <div class="newscontainer">
        @foreach ($xml->NewsAll->News  as $news)
        <div class="news">
            <h1 class="newsheadline">{!! $news->attributes()->headline !!}</h1>
            <div class="newsinfo">
                <p class="author">Author: <a href="mailto:{!! $news->attributes()->contactEmail !!}">{!! $news->attributes()->contactEmail !!}</a></p>
                <p class="newsdate">Published at: {!! $news->attributes()->publishDate !!}</p>
            </div>
            <div class="newscontent">{!! $news->div->div->div->div->asXML() !!}</div><br>
        </div>

        @endforeach
    </div>
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
