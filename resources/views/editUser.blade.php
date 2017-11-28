@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Update your profile</h1>
          <form class="form-horizontal" method="POST" action="{!! url('/editUser'); !!}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-md-4 control-label">Name</label>

                  <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name or old('name') }}"></input>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                  <div class="col-md-6">
                    <input id="name" type="email" class="form-control" name="email" value="{{ $user->email or old('email') }}"></input>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label for="title" class="col-md-4 control-label">title</label>

                  <div class="col-md-6">
                      <input id="title" type="text" class="form-control" name="title" value="{{ $user->title or old('title') }}"></input>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                  <label for="description" class="col-md-4 control-label">About you</label>

                  <div class="col-md-6">
                      <textarea id="description" type="text" class="form-control" name="description" cols="50" rows="3">{{ $user->description or old('description') }}</textarea>
                  </div>
              </div>

              <div class="form-group">
                  <label for="type" class="col-md-4 control-label">type</label>

                  <div class="col-md-6">
                      <input id="type" type="checkbox" class="form-control" name="type" value="Freelancer">freelancer<br>
                      <input id="type" type="checkbox" class="form-control" name="type" value="Job_seeker">Job seeker
                  </div>
              </div>

              <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                  <label for="country" class="col-md-4 control-label">Country</label>

                  <div class="col-md-6">
                      <input id="country" type="text" class="form-control" name="country" value="{{ $user->country or old('country') }}"></input>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                  <label for="city" class="col-md-4 control-label">City</label>

                  <div class="col-md-6">
                      <input id="city" type="text" class="form-control" name="city" value="{{ $user->city or old('city') }}"></input>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('phone_nr') ? ' has-error' : '' }}">
                  <label for="phone_nr" class="col-md-4 control-label">Phone nr.</label>

                  <div class="col-md-6">
                      <input id="phone_nr" type="text" class="form-control" name="phone_nr" value="{{ $user->phone_nr or old('phone_nr') }}"></input>
                  </div>
              </div>

              <div class="form-group">
                  <label for="available_or_not" class="col-md-4 control-label">Are you available for new project?</label>

                  <div class="col-md-6">
                      <input id="available_or_not" type="checkbox" class="form-control" name="available_or_not" value="Available">I'm available<br>
                      <input id="available_or_not" type="checkbox" class="form-control" name="available_or_not" value="Not available">I'm not available
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          Update
                      </button>
                  </div>
              </div>

          </form>
        </div>
    </div>
</div>
@endsection
