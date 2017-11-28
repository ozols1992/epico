<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

use Illuminate\Http\Request;

class epicoApiController extends Controller
{
    //
    public function callapi()
{
      try {

           $client = new GuzzleHttpClient();

           $apiRequest = $client->request('GET', 'http://epico.dk/umbraco/surface/home/AllAdvertising');

          $content = json_decode($apiRequest->getBody()->getContents());

      } catch (RequestException $re) {

      }
      return view('vacancies');
 }

}
