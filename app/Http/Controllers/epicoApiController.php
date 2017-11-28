<?php

namespace App\Http\Controllers;
require 'vendor/autoload.php';

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class epicoApiController extends Controller
{
    //
    public function callapi()
    {
      $client = new \GuzzleHttp\Client();
      $res = $client->request('GET', 'http://epico.dk/umbraco/surface/home/AllAdvertising');
      echo $res->getStatusCode();
      // 200
      echo $res->getHeaderLine('content-type');
      // 'application/json; charset=utf8'
      echo $res->getBody();
      // '{"id": 1420053, "name": "guzzle", ...}'

      // Send an asynchronous request.
      $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
      $promise = $client->sendAsync($request)->then(function ($response) {
          echo 'I completed! ' . $response->getBody();
      });
      $promise->wait();
    }
}
