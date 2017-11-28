<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        return view('admin');
    }

    public function display_users()
    {
        $users = User::all();

        return view('admin')->with(['users' => $users]);
    }

}
