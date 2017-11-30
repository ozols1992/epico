@extends('layouts.app')

@section('content')
<div class="container">
   <h3>{{ $vacancy->HeadLine }} Application</h3>

<div class="userstuff">
                <table>
                    <tr>
                        <td class='profileimgholder_small'><img alt="UserImg" src="http://kultbox.dk/wp-content/uploads/2016/02/Bj%C3%B8rn-Jensen_avatar_1454709982-200x200.jpg" style="border: 1px solid gray; height: 70px; width: 60px;"></td>
                        <td>
                            Name: {{ $User->name}}<br/>
                            E-mail: {{ $User->email }}<br/>
                            <a href="#">See Profile</a><br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Phasellus dui. Maecenas facilisis nisl vitae nibh. Proin vel seo est vitae...</td>
                    </tr>
                </table>
            </div>
<div id="msgform">
    <table class="msgform">
        <tr>
            <form action="" method="post">
                <td><textarea name="message" class="msgtextinput"></textarea></td>
                <td><input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Apply" class="msgsendbutton"></td>
            </form>
        </tr>
    </table>
</div>
</div>

@endsection
