<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class HomeController extends Controller
{
    public function index(Request $request)
    {
       $guzzle = new Client([
           'verify' => false
       ]);
       $html = $guzzle->get('https://www.amazon.com/ZOTAC-GeForce-Graphics-IceStorm-ZT-A30600H-10M/dp/B08W8DGK3X/ref=sr_1_2?crid=UYBJ361DHO5I&keywords=gtx+3060&qid=1693393706&sprefix=gtx+30%2Caps%2C249&sr=8-2&ufe=app_do%3Aamzn1.fos.c3015c4a-46bb-44b9-81a4-dc28e6d374b3');
       $html = $html->getBody();

       $targetText = 'In Stock';

      if (!strpos($html, $targetText)) {
          $html = 'Out of stock';
      } else {
          $html = 'In Stock';
      }

        return view('welcome', [
            'html' => $html
        ]);
    }
}
