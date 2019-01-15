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

    public function show($id, $courseId)
    {
        $client = new Client();
        $response = $client->get('http://rest.ppsdm.com:5000/getUserProfile/' . $id);
        $userProfile = json_decode($response->getBody(), true);
        return view('report-lk', ['userProfile' => $userProfile['data']]);
    }

    //
}