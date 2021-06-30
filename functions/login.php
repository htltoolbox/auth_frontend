<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/.env.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/include/include.php";

function login($username, $password)
{
    $curl = curl_init();
    $ip = getUserIpAddr();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.toolbox.philsoft.at/token?ip=' . $ip,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'username=' . $username . '&password=' . $password . '',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
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

function hashlogin($appid, $username, $password)
{
    $curl = curl_init();

    echo "<hr>";
    echo "Appid: " . $appid;
    echo "<br>";
    echo "Username " . $username;
    echo "<br>";
    echo "Password " . $password;
    echo "<hr>";


    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.toolbox.philsoft.at/flow/oauth2/temphash/" . $appid . "?ip=" . getUserIpAddr(),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "username=".$username."&password=".$password."&scope=&client_id=&client_secret=",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "Content-Type: application/x-www-form-urlencoded"
        ),
    ));


    $response = curl_exec($curl);

    echo $curl.CURLOPT_URL;
    echo $response;

    curl_close($curl);

    $obj = json_decode($response);

    if (isset($obj->{'temphash'})) {
        return $obj;
    } else {
        return FALSE;
    }
}


