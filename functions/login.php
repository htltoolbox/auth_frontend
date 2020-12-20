<?php

function login($username, $password)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "127.0.0.1:8000/token",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "username=$username&password=$password",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded"
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $obj = json_decode($response);

    if (isset($obj->{'access_token'})) {
        return $obj->{'access_token'};
    } else {
        return FALSE;
    }


}

