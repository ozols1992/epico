<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class epicoApiController extends Controller
{
    //
    public function index()
    {
      $json = file_get_contents('http://epico.dk/umbraco/surface/home/AllAdvertising');
      $obj = json_decode($json);

      return view('vacancies', compact('obj'));
    }

}
