@extends('layouts.app')

@section('content')<div class="accounttop1">   
<button class="buttoneditprofile">
                <a href='{!! url('/editUser'); !!}'><span class="editicon">
                    <img src="img/editicon.png"></span></a>
            </button> 
       
</div>

    <div class="container">
        @if (Auth::check())
            <div class="profiletop">
            <form id="uploadform" enctype="multipart/form-data" action="/profile" method="post">
                <div class="profileimagecontainer"><label for="imageupload"><img class="responsivepic" src="/img/avatars/{{ Auth::user()->avatar }}"></label></div>
                <input id="imageupload" type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            <div class="profileinformation">
            <h2 class="profilename">{{ Auth::user()->name }}</h2><br>
            <div class="workandstatusinfo">
            <h5 class="typeofwork">{{ Auth::user()->type }}</h5>
            <h5 class="currentstatusprofile">{{ Auth::user()->available_or_not }}
            </h5><br>
            </div>
        </div>
           
        </div>
       

        <h5 class="usertitle">{{ Auth::user()->title }}</h5> 
        <div class="accounttop2"></div> 
            

       
            <div class="userprofileinformation">
            
            <h3>About me</h3>
            <h5>{{ Auth::user()->description }}</h5>
            <span class="editiconemail">
                    <img src="img/email.png"></span>
            <h3>email:</h3>
            <h5>{{ Auth::user()->email }}</h5>
            <span class="adressicon">
                    <img src="img/address.png"></span>
            <h3>Address:</h3>
            <h5>{{ Auth::user()->country }}</h5>
            <h5>{{ Auth::user()->city }}</h5>
            <h5>{{ Auth::user()->address }}</h5>
            <h5>{{ Auth::user()->zip_code }}</h5>
            <span class="phonenumber">
                    <img src="img/phone.png"></span>
            <h3>Phone nr.</h3>
            <h5>{{ Auth::user()->phone_nr }}</h5>
            
        </div>
            
        @else
            <h3 class="notloggedin">You need to log in. <a href="/login">Click here to login</a></h3>
        @endif
    </div>
@endsection
