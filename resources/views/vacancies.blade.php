@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::check())
      <h1>Job vacancies</h1>
              @foreach ($obj as $job)

              <h3 class='jobtitle'>{{ $job->HeadLine }}</h3>
              

              @endforeach
    @else
      <h3>You need to log in. <a href="/login">Click here to login</a></h3>
    @endif
</div>
@endsection
