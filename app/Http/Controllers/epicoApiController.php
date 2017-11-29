<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request as httpRequest ;
use App\Product;
use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;

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
