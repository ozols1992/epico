<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;


class epicoApiController extends Controller
{
    //vacancies
    protected static $url_vacancies_epico = "http://epico.dk/umbraco/surface/home/AllAdvertising";
    protected static $url_vacancies = "./files/AllAdvertising.json";
    
    //newsfeed
    protected static $url_newsfeed_epico = "http://mesterm.dk/simpleproxy/buddyshop_dk/newsfeed";
    protected static $url_newfeed = "./files/newsfeed.xml";
    
    //contacts
    protected static $url_contacts_epico = "http://mesterm.dk/simpleproxy/buddyshop_dk/contacts-feed";
    protected static $url_contacts = "./files/contacts-feed.xml";

    //
    public function vacanciesApi()
    {
      $json = file_get_contents(self::$url_vacancies);
      $obj = json_decode($json);
      
      return view('vacancies',compact('obj'));
    }

    public function newsfeedApi()
    {
      $xml = simplexml_load_file(self::$url_newfeed);

      return view('welcome', compact('xml'));
    }

    public function contactsApi()
    {
      $xml = simplexml_load_file(self::$url_contacts);

      return view('contacts', compact('xml'));
    }
    
    public function getVacancies(){
        return json_decode(file_get_contents(self::$url_vacancies), true);
    }
}
