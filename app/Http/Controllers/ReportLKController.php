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
        try {
            $response_2 = $client->get('http://rest.ppsdm.com:5000/getResult/' . $id . '/' . $courseId);
            $testData = json_decode($response_2->getBody(), true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $response_2 = $e->getResponse();
            $testData['data'] = [];
        }

        switch ($courseId) {
            case 4:
                return view('report_lk_4', ['userProfile' => $userProfile['data'],'testData' => $testData['data'] ]);
                break;

            case 10:
                return view('report_lk_10', ['userProfile' => $userProfile['data'], 'testData' => $testData['data']]);
                break;

            default:
                return view('report_lk_4', ['userProfile' => $userProfile['data']]);
        }
    }

    //
}