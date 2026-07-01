<?php

define('API_URL', 'http://localhost:8080/api');

function apiRequest($endpoint, $method = 'GET', $data = null)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => API_URL . $endpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json'
        ]
    ]);

    if ($data != null) {
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    }

    $response = curl_exec($curl);

    curl_close($curl);

    return json_decode($response, true);
}