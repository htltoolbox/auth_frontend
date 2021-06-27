<?php

# Standard Includes

include_once "../include/include.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # If the request method is is POST grab all the information
    # from the form and remove special chars and slashes and all
    # the usual bullshit from it.

    $ip = getUserIpAddr();
    $username = test_input($_POST["username"]);
    $class = test_input($_POST["class"]);
    $password = test_input($_POST["password"]);

    include_once "../functions/register.php";

    # Registration is handled in a separate function: /functions/register.php

    if (register($username, $password, $class, $ip)) {

        # Redirect the User if the function returns True

        header("Location: /reg/sentEmail.php");
    }
}


