<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;


class epicoApiController extends Controller
{
    
    protected static $url_epico = "http://epico.dk/umbraco/surface/home/AllAdvertising";
    protected static $url = "./files/AllAdvertising.json";

    //
    public function vacanciesApi()
    {
      $json = file_get_contents('http://epico.dk/umbraco/surface/home/AllAdvertising');
      $obj = json_decode($json);
      
      return view('vacancies',compact('obj'));
    }

    public function newsfeedApi()
    {
      $xml = simplexml_load_file("http://mesterm.dk/simpleproxy/buddyshop_dk/newsfeed");

      return view('welcome', compact('xml'));
    }

    public function contactsApi()
    {
      $xml = simplexml_load_file("http://mesterm.dk/simpleproxy/buddyshop_dk/contacts-feed");

      return view('contacts', compact('xml'));
    }
    
    public function getVacancies(){
        return json_decode(file_get_contents(self::$url), true);
    }
}
