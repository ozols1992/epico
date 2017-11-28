<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use Auth;

class editUserController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('editUser', compact('user'));
    }

    public function editUser()
    {
      $user = Auth::user();
      $user->name = Request::input('name');
      $user->email = Request::input('email');
      $user->title = Request::input('title');
      $user->description = Request::input('description');
      $user->type = Request::input('type');
      $user->country = Request::input('country');
      $user->city = Request::input('city');
      $user->phone_nr = Request::input('phone_nr');
      $user->available_or_not = Request::input('available_or_not');
      $user->save();
      return view('profile',compact('user'));
    }
}
