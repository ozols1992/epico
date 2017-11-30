@extends('layouts.app')

@section('content')
<div class="container">
   <h3>{{ $vacancy->HeadLine }} Application</h3>

<div id="UserStuff">
    <table>
        <tr>
            <td><img alt="UserImg" src="http://kultbox.dk/wp-content/uploads/2016/02/Bj%C3%B8rn-Jensen_avatar_1454709982-200x200.jpg" style="border: 1px solid gray; height: 70px; width: 60px;"></td>
            <td>Name: {{ $User->name }} - etc.</td>
        </tr>
    </table>
</div>
<form action="" method="post">
    <textarea name="message" style="width: 225px; height: 150px;"></textarea><br/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Apply">
</form>
</div>

@endsection
