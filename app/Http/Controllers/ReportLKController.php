<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use PDF;

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

    public function pdf($id, $courseId){
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

        $userProfile = $userProfile['data'];
        $testData =  $testData['data'];

        if($userProfile['picture_uri']) {
            $url = "http://online.ppsdm.com/app/upload/users/" . $userProfile['id'] . "/" . $userProfile['id'] . "/" . $userProfile['picture_uri'];
            $img = 'assets/img/profile/'.$userProfile['id'].'.jpg';
            file_put_contents($img, file_get_contents($url));
        }
        $image = 'assets/img/profile/'.$userProfile['id'].'.jpg';

        switch ($courseId) {
            case 4:
                $view = view('view-pdf/lk_4', compact('userProfile','image'));
                break;

            case 10:
                $view = view('view-pdf/lk_10', compact('userProfile','image','testData'));
                break;

            default:
                $view = view('view-pdf/lk_15', compact('userProfile','image','testData'));
                break;
        }

        $pdf = PDF::loadHTML($view)->setPaper('a4')->setOption('margin-bottom',10);
        return $pdf->download($userProfile['firstname'].' '.$userProfile['lastname'].'.pdf');
        // return $pdf->stream();
    }
}