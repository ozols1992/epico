@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>EPICO news</h2><br>

    @foreach ($xml->ContactList->contact as $contacts)

      <h3>{{ $contacts->attributes()->name }}</h3>

    @endforeach
  </div>
@endsection
