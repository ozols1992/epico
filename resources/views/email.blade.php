@extends('layouts.app')

@section('content')
  @foreach ($xml->ContactList->Contact as $contacts)
  <form class="form-horizontal" method="POST" action="{!! url('/email'); !!}">
      {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">E-mail address</label>

          <div class="col-md-6">
              <input id="{{ $contacts->attributes()->id }}" type="email" class="form-control" name="email" value="{{ $contacts->attributes()->email }}" required>
          </div>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">Message</label>

          <div class="col-md-6">
              <textarea id="description" type="text" class="form-control" name="description" cols="50" rows="3"></textarea>
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  <span class="fa fa-chevron-right"></span>
              </button>
          </div>
      </div>
  </form>
  @endforeach
@endsection
