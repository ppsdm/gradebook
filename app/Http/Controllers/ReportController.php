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
            $uraianNonBase[] = $data;
        }

        foreach($reportReguler['data']['papi']['uraian_8'] as $data) {
            $uraianNonBase[] = $data;
        }

        foreach($reportReguler['data']['papi']['uraian_10'] as $data) {
            $uraianNonBase[] = $data;
        }

        $output = [];
        $output['data'] = $reportReguler['data'];
        $output['data']['uraianNonBase'] = $uraianNonBase;
        
        switch ($courseId) {
            case 10:
                $view = 'report-view';
                break;
            
            case 15:
                $view = 'report-view-15';
                break;

            default:
                $view = 'report-view';
                break;
        }
        return view($view,
            ['reportReguler' => $output['data']],
            ['userProfile' => $userProfile['data']]
        );
    }
}