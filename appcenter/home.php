<?php

include "../include/include.php";

if (empty($userdata = json_decode($_SESSION['userdata']))) {
    header("Location: /index.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <link rel="apple-touch-icon" href="icon.png">


    <title>HTL-Toolbox | Apps</title>

    <link rel="stylesheet" href="../css/util.css"
    <link rel="stylesheet" href="../css/w3.css">

    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">


    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <style>
        .grid-container {
            display: grid;
            grid-auto-flow: column;
            grid-gap: 50px;
            margin: 100px;
            justify-content: center;
        }

        .grid-item {
            width: 300px;
            height: 300px;
            background-size: 100%;
        }

        .grid-item:hover,
        .grid-item:focus {
            box-shadow: 0 0.5em 0.5em -0.4em #1f1f1f;
            transform: translateY(-0.25em);
        }

        .grid-item:hover, .grid-item:active {
            animation: box-shadow;
            animation-duration: 250ms;
            animation-timing-function: ease-in-out;
        }

        .app-icon {
            width: 100px;
            height: 100px;
            border-radius: 10px;
        }

    </style>

</head>
<body>
<div class="main">
    <div id="topbar">
        <div class="al_start">
            <div id="burger" class="menuitem"><img src="../content/Icons/burger.svg" class="icon" alt="burger"></div>
            <div id="search" class="menuitem"><img src="../content/Icons/search.svg" class="icon" alt="search"><input
                        alt="serach"></div>
        </div>
        <img src="../content/Logo.png" class="toplogo" alt="Logo">
        <div id="user" class="menuitem"><img src="../content/Icons/user-solid.svg" class="icon" alt="user"><span
                    style="margin-top: 10px"><?php echo $userdata->NAME . " " . $userdata->LASTNAME ?></span></div>
    </div>
    <div class="head text-center">
        <h1>Hallo <?php echo $userdata->NAME . " " . $userdata->LASTNAME ?></h1>
    </div>
    <div class="grid-container">
        <div class="grid-item flex-c-b" style="background-image: url('Icons/LT_Logo965x965.png')">
            <h3 class="app-name text-white p-b-15">Leiterplattentechnik</h3>
        </div>
        <div class="grid-item flex-c-b" style="background-image: url('Icons/htltoolbox (2).png')">
            <h3 class="app-name"></h3>
        </div>
        <a href="https://whiteboard.philsoft.at/">
            <div class="grid-item flex-c-b" style="background-image: url('Icons/weberboard.png')">
                <h3 class="app-name text-white p-b-15">Weberboard</h3>
            </div>
        </a>
    </div>
</div>
</body>
</html>
