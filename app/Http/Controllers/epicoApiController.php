<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;

class epicoApiController extends Controller
{
    //
    public function callapi()
    {
      $client = new Client();
      $json = $client->get('http://epico.dk/umbraco/surface/home/AllAdvertising');
      $obj = json_encode($json);

      return view('vacancies', compact('obj'));
    }

}
