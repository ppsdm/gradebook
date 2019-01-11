<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

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

    public function index($userId, $courseId)
    {
        // dd($courseId);
        $client = new Client;
        $response = $client->get('http://rest.ppsdm.com:5000/getresult/'. $userId .  '/' . $courseId);
        $reportReguler =  json_decode($response->getBody(), true);

        $response = $client->get('http://rest.ppsdm.com:5000/getUserProfile/' . $userId);
        $userProfile = json_decode($response->getBody(), true);

        return view('report-view', ['reportReguler' => $reportReguler['data']], ['userProfile' => $userProfile['data']]);
    }

    //
}