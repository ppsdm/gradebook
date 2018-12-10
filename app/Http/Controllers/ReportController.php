<?php

namespace App\Http\Controllers;
// use GuzzleHttp\Exception\GuzzleException;
// use GuzzleHttp\Client;

class ReportController extends Controller
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

    public function index()
    {
        // $client = new \GuzzleHttp\Client();
        // $response = $client->get('http://localhost:5000/getresult/i153529384897102299/i153529349888522067');
        // return json_decode($response->getBody(), true);
        return view('report-view');
    }

    //
}