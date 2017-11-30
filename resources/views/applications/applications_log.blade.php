@extends('layouts.app')

@section('content')
<div class="container">
   <h3>{{ $vacancy->HeadLine }} Application</h3>
<a href="./">View</a> - <a href="./apply">Apply</a>
<div id="app" >
    <msglog :messages="messages"></msglog>
    <msgform v-on:msgsent="addmsg"></msgform>
</div>
<script src="{{ asset('js/app.js') }}" charset="utf-8">
</script>
</div>

@endsection
