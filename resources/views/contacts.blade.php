@extends('layouts.app')

@section('content')
<div class="container">
    <h2>EPICO Contacts</h2><br>

    @foreach ($xml->ContactList->Contact as $contacts)
    <img src="{!! $contacts->attributes()->image !!}">
    <h4>{!! $contacts->attributes()->name !!}</h4>
    <h5>{!! $contacts->attributes()->phone !!}</h5>
    <h5>{!! $contacts->attributes()->email !!}</h5>
    <h5>{!! $contacts->attributes()->department !!}</h5>
    <h5>{!! $contacts->attributes()->location !!}</h5>


    @endforeach


</div>
@endsection
