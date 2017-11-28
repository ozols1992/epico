<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use Image;

class UserController extends Controller
{
    //
    public function profile()
    {
        $user = Auth::user();
        return view('profile',compact('user'));
    }

    public function update_avatar(Request $request)
    {
        // handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/img/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('profile',compact('user'));
    }

}
