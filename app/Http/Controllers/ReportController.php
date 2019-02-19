<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Spipu\Html2Pdf\Html2Pdf;

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

        return view('report-view',
            ['reportReguler' => $output['data']],
            ['userProfile' => $userProfile['data']]
        );
    }

    public function pdf($userId, $courseId) {
        $client = new Client;
        $response = $client->get('http://rest.ppsdm.com:5000/getResult/'. $userId .  '/' . $courseId);
        $reportReguler =  json_decode($response->getBody(), true);

        $profile = $client->get('http://rest.ppsdm.com:5000/getUserProfile/' . $userId);
        $userProfile = json_decode($profile->getBody(), true);
        
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

        $htmlpdf = new Html2Pdf('P', 'A4', 'en');
        $htmlpdf->pdf->SetTitle('title pdf');
        $htmlpdf->writeHTML(view('result_pdf', compact('reportReguler', 'uraianNonBase', 'userProfile')));
        $htmlpdf->output('my_doc.pdf');
    }
}