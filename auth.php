<?php

error_reporting(E_ALL & ~E_NOTICE);

include_once "include/include.php";
include_once ".env.php";

$debug = $GLOBALS['debug'];
$GLOBALS['token'] = TRUE;

# Declare Empty Strings

$username = $password = "";

# Test if an AppId was passed in and is valid
$newappid = test_input($_GET['appid']);
if ($newappid != null) {
    $appid = $newappid;

    # Write the AppID into the session and global superglobals

    $GLOBALS['appid'] = $appid;
    $_SESSION['appid'] = $appid;

    if($debug){
        echo "<script>console.log('AppID = ' + $appid);</script>";
    }
}


?>

<html lang="de_DE">
<head>
    <meta charset="UTF-8">
    <title>HTL-Toolbox</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel="stylesheet" href="css/w3.css"
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.scss">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#9372b1">

    <style>
        h1 {
            color: white;
            font-size: 80px;
            text-align: center;
            margin: 50px;
        }

        #remove1 {
            display: none;
        }

        #remove2 {
            display: none;
        }

        #remove3 {
            display: none;
        }

        html {
            margin: 0;
            height: 100%;
            overflow: hidden;
        }

        .animate-opacity {
            animation: opac 0.8s
        }

        @keyframes opac {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }


    </style>
</head>
<body>
<div id="particles-background" class="vertical-centered-box"></div>
<div id="particles-foreground" class="vertical-centered-box"></div>
<div class="vertical-centered-box">
    <div id="load">
        <script src="js/index.js"></script>
        <div id="particles-background" class="vertical-centered-box"></div>
        <div id="particles-foreground" class="vertical-centered-box"></div>
        <div class="vertical-centered-box animate-opacity">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="/content/Logo.png" width="65" alt="">
            </div>
        </div>
    </div>
    <div class="content" id="main">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
            <form class="login100-form validate-form" action="oauth.php"
                  method="post">
						<span class="login100-form-title p-b-55">
							<img src="/content/Design/Black/Logo.png" width="100" alt="">

						</span>
                <?php
                if ($GLOBALS['token'] == FALSE) {
                    echo "<div class='w3-panel w3-red flex-sb p-t-10 p-l-10 p-r-10 p-b-10'>
                                    <i class='w3-xxlarge p-r-10 lnr lnr-cross-circle'></i>
                                    <h3>Email und Passwort sind in dieser Kombination nicht korrekt.</h3>
                                  </div> ";
                }
                ?>
                <div class="wrap-input100 validate-input m-b-16" id="remove1"
                     data-validate="Du musst eine gültige E-Mail-Adresse der HTL Salzburg eingeben: z.B. max.mustermann02@htl-salzburg.ac.at">
                    <input class="input100" type="email" name="username" placeholder="E-Mail">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
								<span style="" class="lnr lnr-envelope"></span>
							</span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" id="remove2"
                     data-validate="Du musst dein Passwort eingeben.">
                    <input class="input100" type="password" name="password" placeholder="Passwort">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
								<span class="lnr lnr-lock"></span>
							</span>
                </div>
                <div class="container-login100-form-btn p-t-25">
                    <button class="login100-form-btn">Login</button>
                </div>
                <div class="text-center w-full p-t-115">
                    <span class="txt1 m-r-10">Noch keinen Account?</span>
                    <a class="txt1 bo1 hov1" href="register.php">Registieren</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/index.js"></script>
<script src="js/load.js"></script>

</body>
</html>
