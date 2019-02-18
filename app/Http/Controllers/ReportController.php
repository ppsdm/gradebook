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
        $response = $client->get('http://rest.ppsdm.com:5000/getResult/'. $userId .  '/' . $courseId);
        $reportReguler =  json_decode($response->getBody(), true);

        $response = $client->get('http://rest.ppsdm.com:5000/getUserProfile/' . $userId);
        $userProfile = json_decode($response->getBody(), true);

        $uraianNonBase = [];
        foreach($reportReguler['data']['papi']['uraian_4'] as $data) {
            $uraianNonBase[] = $data;
        }

        foreach($reportReguler['data']['papi']['uraian_6'] as $data) {
            $uraianNonBase[] = array_push($uraianNonBase, $data);
        }
        foreach($reportReguler['data']['papi']['uraian_8'] as $data) {
            $uraianNonBase[] = array_push($uraianNonBase, $data);
        }
        
        $output = [];
        $output['data'] = $reportReguler['data'];
        $output['data']['uraianNonBase'] = $uraianNonBase;

        return view('report-view',
            ['reportReguler' => $output['data']],
            ['userProfile' => $userProfile['data']]
        );
    }
}