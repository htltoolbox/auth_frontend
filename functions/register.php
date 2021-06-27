<?php


function register($EMAIL, $PASSWORD, $CLASS, $IP)
{
    $debug = $GLOBALS['debug'];

    include_once "../.env.php";
    include_once "../include/include.php";
    $curl = curl_init();

    $ip = getUserIpAddr();

    if ($debug) {
        echo "IP: " . $ip;
        echo " | Email: " . $EMAIL;
        echo " | Password: " . $PASSWORD;
        echo " | Class: " . $CLASS;
    }


    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.toolbox.philsoft.at/create/user?api_key=' . $env_apikey . '&ip=' . $ip,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => '{
      "EMAIL": "' . $EMAIL . '",
      "PASSWORD": "' . $PASSWORD . '",
      "CLASS": "' . $CLASS . '"
    }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    var_dump($curl);

    $response = curl_exec($curl);
    echo $response;
    $http_status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    if ($http_status_code == 200) {
        return TRUE;
    }

    return FALSE;


}