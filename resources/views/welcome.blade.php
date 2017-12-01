@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())
            <h2>EPICO news</h2>
            @foreach ($xml->NewsAll->News  as $news)
            <h3>{{ $news->attributes()->headline }}</h3>
            <h4>{{ $news->attributes()->contactEmail }}</h4>
            <h5>Published at: {{ $news->attributes()->publishDate }}</h5>
            <h3>{{ $news->div->div->div->div->asXML() }}</h3>
            @endforeach
        @else
            <h3>You need to log in. <a href="/login">Click here to login</a></h3>
        @endif
    </div>
@endsection
