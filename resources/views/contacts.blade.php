@extends('layouts.app')

@section('content')
<div class="container">
    <h2>EPICO newhf</h2><br>

    @foreach ($xml->ContactList->Contact as $contacts)
    {!! $contacts->attributes()->image !!}
    <h4>{!! $contacts->attributes()->name !!}</h4>
    <h5>{!! $contacts->attributes()->phone !!}</h5>
    <h5>{!! $contacts->attributes()->email !!}</h5>
    <h5>{!! $contacts->attributes()->department !!}</h5>
    <h5>{!! $contacts->attributes()->location !!}</h5>


    @endforeach


</div>
@endsection
