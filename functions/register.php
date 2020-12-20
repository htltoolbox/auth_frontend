<?php

function register($EMAIL, $PASSWORD, $CLASS)
{
    include_once "../.env.php";
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "localhost:8000/create/user?api_key=" . $env_apikey,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => "{\r\n  \"EMAIL\": \"$EMAIL\",\r\n  \"PASSWORD\": \"$PASSWORD\",\r\n  \"CLASS\": \"$CLASS\"\r\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $http_status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    if ($http_status_code == 200) {
        return TRUE;
    }

    return FALSE;


}