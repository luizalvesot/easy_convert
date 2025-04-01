<?php

namespace App\Modules\Awesome;


abstract class Awesome extends Auth
{

    public function __construct()
    {
        parent::__construct();
    }

    public function request($path, $method = 'GET', $postfields = null)
    {
        $curl = curl_init();

        $full_url = "$this->domain/$path/$postfields";

        curl_setopt_array($curl, [
            CURLOPT_URL => $full_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            /*CURLOPT_POSTFIELDS => json_encode($postfields),
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                //"Token: " . $this->token,
                //"Cookie: " . $this->token,
            ],*/
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response);
    }
}