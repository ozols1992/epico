@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jobs">
        @if (Auth::check())
        <h1 class="sitetitle">Job vacancies</h1><br>
        @foreach ($obj as $job)
        <div class="job">
            <h3 class='jobtitle'>{{ $job->HeadLine }}</h3>
            <div class="accordion">
                <div class="maininfo1">
                    @if ($job->AdvertisingType == "Fast")
                    <p class='advertisingtype'>Looking for permanent employee</p>
                    @endif
                    @if ($job->AdvertisingType == "Freelance")
                    <p class='advertisingtype'>Looking for freelancer</p>
                    @endif
<<<<<<< HEAD
                    <p class='begindate'>Job start: {{ $job->JobBeginDate }}</p>
=======
                    <p class='begindate'>Job start: {!! $job->JobBeginDate !!}</p>
>>>>>>> df56b97abc27725e6038c54a40b4ad67462b31af
                    <p class='deadline'>Application deadline: {{ $job->Applicationdeadline }}</p>
                    @if ($job->Duration !== null)
                    <p class='duration'>Job duration: {{ $job->Duration }}</p>
                    @endif
                </div>
                <div class="maininfo2">
                    @if ($job->Location !== null)
                    <p class='location'>{{ $job->Location }}</p>
                    @endif
                    <p class='country'>{{ $job->Country }}</p>
                </div>
            </div>
            <div class="panel">
<<<<<<< HEAD
                <p class='description'>{{ $job->Description }}</p>               
=======
                <p class='description'>{{ $job->Description }}</p>
>>>>>>> df56b97abc27725e6038c54a40b4ad67462b31af
                <p class='contactjob'>Contact: {{ $job->SearchEmail }}</p>
                @if ($job->Footer !== null)
                <p class='jobfooter'>{{ $job->Footer }}</p>
                @endif
            </div>
        </div>
        @endforeach
        @else
        <h3 class="notloggedin">You need to log in. <a href="/login">Click here to login</a></h3>
        @endif
<<<<<<< HEAD
=======

>>>>>>> df56b97abc27725e6038c54a40b4ad67462b31af
    </div>
</div>

    @endsection
