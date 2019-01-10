<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ReportLKController extends Controller
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

    public function show($id)
    {
        $client = new Client();
        $response = $client->get('http://localhost:5000/getUserProfile/' . $id);
        $userProfile = json_decode($response->getBody(), true);
        return view('report-lk', ['userProfile' => $userProfile['data']]);
    }

    //
}