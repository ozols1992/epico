@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="sitetitle">Contact EPICO</h1><br>

    <div class="contactmainflex">
        @foreach ($xml->ContactList->Contact as $contacts)
        <div class="contactfield">
            <div class="imgwrapcontact">
                <img class="contactimage" src="{!! $contacts->attributes()->image !!}">
                <a class="contactbuttonphone">Contact</a>
            </div>
            <div class="contactinfo">
                <h4 class="contactname">{!! $contacts->attributes()->name !!}</h4>
                <div class="informationflex">
                    <div class="informationinnerflex">
                        <div class="iconcontainer">
                            <img class="contacticon"  src="img/Department.png" alt=""/>
                        </div>
                        <h5 class="h5info">{!! $contacts->attributes()->department !!}</h5>
                        <div class="iconcontainer">
                            <img class="contacticon"  src="img/Phone.png" alt=""/>
                        </div>
                        <h5 class="h5info">{!! $contacts->attributes()->phone !!}</h5>
                        <div class="iconcontainer">
                            <img class="contacticon"  src="img/Email.png" alt=""/>
                        </div>
                        <h5 class="h5info">{!! $contacts->attributes()->email !!}</h5>
                        <div class="iconcontainer">
                            <img class="contacticon"  src="img/Address.png" alt=""/>
                        </div>
                        <h5 class="h5info">{!! $contacts->attributes()->location !!}</h5>
                    </div>
                    <a class="contactbutton">Contact</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>

</div>
@endsection
