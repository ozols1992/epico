@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::check())
      <h1>Job vacancies</h1><br>
        @foreach ($obj as $job)
          <h3 class='jobtitle'>{{ $job->HeadLine }}</h3>
        @if ($job->AdvertisingType == "Fast")
          <p class='advertisingtype'>Looking for permanent employee</p>
        @endif
        @if ($job->AdvertisingType == "Freelance")
          <p class='advertisingtype'>Looking for freelancer</p>
        @endif
        @if ($job->Location !== null)
          <p class='location'>{{ $job->Location }}</p>
        @endif
          <p class='country'>{{ $job->Country }}</p>
          <p class='description'>{{ $job->Description }}</p>
          <p class='begindate'>Job start: {{ $job->JobBeginDate->format('m/d/Y') }}</p>
          <p class='deadline'>Application deadline: {{ $job->Applicationdeadline->format('m/d/Y') }}</p>
        @if ($job->Duration !== null)
          <p class='duration'>Job duration: {{ $job->Duration }}</p>
        @endif
          <p class='contactjob'>Contact: {{ $job->SearchEmail }}</p>
        @if ($job->Footer !== null)
          <p class='jobfooter'>{{ $job->Footer }}</p>
        @endif
        @endforeach
    @else
      <h3>You need to log in. <a href="/login">Click here to login</a></h3>
    @endif
</div>
@endsection
