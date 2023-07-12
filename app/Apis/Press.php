<?php

namespace App\Apis;

class Press
{
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://ciam.gov.ao/api/press',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Authorization: Basic cGF1bG8uc2FudG9zQGluZm9zaS5nb3YuYW86Q2hhbmRpbmhvMDFA',
            ],
        ]);
        $response = curl_exec($curl);

        curl_close($curl);
        $result = json_decode($response, TRUE);

        return $result ?? 0;


    }

    public function find($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://ciam.gov.ao/api/press/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Authorization: Basic cGF1bG8uc2FudG9zQGluZm9zaS5nb3YuYW86Q2hhbmRpbmhvMDFA',
            ],
        ]);
        $response = curl_exec($curl);

        curl_close($curl);
        $result = json_decode($response, TRUE);

        return $result ?? 0;


    }
}
