@extends('layouts.app')

@section('content')
<div class="container">
   <h3>{{ $vacancy->HeadLine }} Application</h3>

<div class="userstuff">
                <table>
                    <tr>
                        <td class='profileimgholder_small'><img class="profileimg" alt="Profile Img" src="{{ asset('img/avatars/' . $User->avatar) }}"></td>
                        <td>
                            Name: {{ $User->name}}<br/>
                            E-mail: {{ $User->email }}<br/>
                            <a href="#">See Profile</a><br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">{{ $User->description }}</td>
                    </tr>
                </table>
            </div>
<div id="msgform">
    <form action="" method="post">
    <table class="msgform">
        <tr>
            <td><textarea name="message" class="msgtextinput"></textarea></td>
            <td><input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Apply" class="msgsendbutton"></td>
        </tr>
    </table>
        </form>
</div>
</div>

@endsection
