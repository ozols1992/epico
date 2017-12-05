<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function index()
    {
        return view('email');
    }

    public function contactsApi()
    {
      $xml = simplexml_load_file("http://mesterm.dk/simpleproxy/buddyshop_dk/contacts-feed");



      return view('email', compact('xml'));
    }
}
