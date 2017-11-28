<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class FrontController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('welcome',compact('user'));
    }
}
