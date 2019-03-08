<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class DiscController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index($id, $courseId)
    {
        $client = new Client;
        $response = $client->get('http://rest.ppsdm.com:5000/getResult/'. $id .  '/' . $courseId);
        $disc =  json_decode($response->getBody(), true);

        return view('disc_chart', ['discreport' => $disc['data']]);
    }
}
