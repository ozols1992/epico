@extends('layouts.app')

@section('content')
<div class="container">
    <h2>EPICO news</h2><br>

    @foreach ($xml->ContactList as $contacts)


    @endforeach

    
</div>
@endsection
