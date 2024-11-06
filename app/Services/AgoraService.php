<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgoraService
{
    protected $appID;
    protected $appCertificate;

    public function __construct()
    {
        $this->appID = env('AGORA_APP_ID');
        $this->appCertificate = env('AGORA_APP_CERTIFICATE');
    }

    function createAgoraProject($name)
    {
        $customerKey = env('customerKey');
        $customerSecret = env('customerSecret');
        $credentials = $customerKey . ":" . $customerSecret;
        $base64credentials = base64_encode($credentials); // Corrected variable name
        $arr_header = "Authorization: Basic " . $base64credentials; // Added space after "Basic"

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://console.agora.io/project",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode([
                "name" => $name,
                "enable_sign_key" => true
            ]),
            CURLOPT_HTTPHEADER => [
                $arr_header,
                "Content-Type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        
        if ($response === false) {
            // Handle cURL error
            return ['error' => curl_error($curl)];
        }

        curl_close($curl);
        $result = json_decode($response);
        return $result;
    }

    public function createToken($appId, $appCertificate, $channelName)
    {
        $apiUrl = 'https://api.agora.io/v1/apps/' . $appId . '/tokens';

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query([
                'appId' => $appId,
                'appCertificate' => $appCertificate,
                'channelName' => $channelName
            ]),
        ]);

        $response = curl_exec($curl);

        if ($response === false) {
            // Handle cURL error
            return ['error' => curl_error($curl)];
        }

        curl_close($curl);
        return $response;
    }

    public function generateRandomString($length = 7)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}