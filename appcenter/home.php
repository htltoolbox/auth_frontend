<?php

include "../include/include.php";

if (empty($userdata = json_decode($_SESSION['userdata']))) {
    header("Location: /index.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTL-Toolbox | Apps</title>

    <link rel="stylesheet" href="../css/util.css"
    <link rel="stylesheet" href="../css/w3.css">
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

        .app-icon {
            width: 100px;
            height: 100px;
            border-radius: 10px;
        }

    </style>

</head>
<body>
<div class="main">
    <div class="navbar"><?php include $_SERVER["DOCUMENT_ROOT"] . '/allSiteElements/navbar/menu.php'; ?></div>
    <div class="head">
        <h1>Hallo <?php echo $userdata->NAME . " " . $userdata->LASTNAME ?></h1>
    </div>
    <div class="grid-container">
        <div class="grid-item flex-c-b" style="background-image: url('Icons/LT_Logo965x965.png')">
            <h3 class="app-name">Leiterplattentechnik</h3>
        </div>
        <div class="grid-item flex-c-b" style="background-image: url('Icons/htltoolbox (2).png')">
            <h3 class="app-name"></h3>
        </div>
        <div class="grid-item flex-c-b" style="background-image: url('Icons/LT_Logo965x965.png')">
            <h3 class="app-name">Leiterplattentechnik</h3>
        </div>
    </div>
</div>


</body>
</html>
