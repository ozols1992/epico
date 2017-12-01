@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())
            <h2>EPICO news</h2>
            @foreach ($xml->NewsAll->News  as $news)

            <h3>{{ $news->attributes()->headline }}</h3>
            <h5>{{ $news->attributes()->contactEmail }}</h5>
            <h5>Published at: {{ $news->attributes()->publishDate }}</h5>
            <div>{{ $news->div->div->div->div->asXML() }}</div><br>

            @endforeach
        @else
            <h3>You need to log in. <a href="/login">Click here to login</a></h3>
        @endif
    </div>
@endsection
