<?php

include_once "include/include.php";

# Check if the request is of type Post

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # Get the APP-ID out of the Session superglobal

    $appid = $_SESSION['appid'];
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);


    echo "APPID: " . $appid;

    include "functions/login.php";

    if (isset($appid)) {

        $resp = hashlogin($appid, $username, $password);

        if (!$resp) {
            echo "<script>console.log('Login-Failed (Response False)');</script>";
            die();
        }

        $redirecturl = $resp->{'redirect-url'};
        $temphash = $resp->{'temphash'};

        header("Location: " . $redirecturl . $temphash);
    }
}