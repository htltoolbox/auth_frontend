<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HTL-Salzburg | Discord Server</title>

    <!-- <link rel="stylesheet" href="w3.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.scss">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


    <style>

        h1 {
            color: #ffffff;
            font-size: 90px;
            text-align: center;
            margin: 50px;
        }


    </style>

</head>

<body>
<div id="particles-background" class="vertical-centered-box"></div>
<div id="particles-foreground" class="vertical-centered-box"></div>

<div class="vertical-centered-box">
    <div class="content">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
            <form action="/reg/send_reg.php" method="post" class="login100-form validate-form">
                <span class="login100-form-title p-b-55">Registrieren</span>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Du brauchst oder ">
                    <input class="input100" type="email" name="username" placeholder="E-Mail">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span style="margin-top: 5px;" class="lnr lnr-envelope"></span>
                    </span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Du brauchst oder ">
                    <input class="input100" type="text" name="class" placeholder="Klasse">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span style="margin-top: 5px;" class="fas fa-project-diagram"></span>
						</span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Passwort">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input class="input100" type="password" name="password_check" placeholder="Passwort wiederholen.">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
                </div>
                <div class="contact100-form-checkbox m-l-4">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="datenschutz">
                    <label class="label-checkbox100" for="ckb1">
                        Ich Akzeptiere die <a href="/law/datenschutz.html">Datenschutzbestimmung</a>
                    </label>
                </div>
                <div class="container-login100-form-btn p-t-25">
                    <button class="login100-form-btn">
                        Los gehts!
                    </button>
                </div>
                <div class="text-center w-full p-t-115">
						<span class="txt1">
							Du besitzt schon einen Account?
						</span>

                    <a class="txt1 bo1 hov1" href="index.php">
                        Einloggen
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const password = document.getElementsByName("password")
        , confirm_password = document.getElementsByName("password_check");

    function validatePassword() {
        if (password.value !== confirm_password.value) {
            confirm_password.setCustomValidity("Passwörter sind nicht gleich");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>


<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="js/main.js"></script>
<script src="js/index.js"></script>
</body>

</html>
