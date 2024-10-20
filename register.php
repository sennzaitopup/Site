<?php

error_reporting(0);

session_start();

$Data = $_SESSION['username'];

if ($Data != "") {
    header('location: ./member_page.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Lost Forever</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'>

    <!-- Font Custom -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Rubik&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Comfortaa', cursive;
            font-weight: 100;
        }
    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>

    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

<body translate="no">


    <!-- Background Music -->
    <iframe src="./music/bg.mp3" type="audio/mp3" allow="autoplay" id="audio" style="display:none"></iframe>

    <div class="container">

        <!-- Stars Effect Started -->
        <?php require_once("./stars.php"); ?>
        <!-- Stars Effect Ended -->

        <!-- Navbar -->
        <?php require_once("./navbar.php"); ?>

        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center" style="padding-top: 150px;">
                <div class="col-lg-6">
                    <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px;">
                        <div class="card-body">
                            <h1 class="text-custom text-uppercase fw-bold">Register</h1>
                            <p class="text-custom text-uppercase fw-bold">Let's create your account, and play with us!</p>
                            <hr>
                            <div class="register-account">
                                <div id="result"></div>
                                <label for="username">
                                    <input id="username" type="text" required minlength="7" maxlength="14" />
                                    <div class="label-text">Username</div>
                                </label>
                                <label for="password">
                                    <input id="password" type="password" required minlength="4" maxlength="14" />
                                    <div class="label-text">Password</div>
                                </label>
                                <label for="repassword">
                                    <input id="repassword" type="password" required minlength="4" maxlength="14" />
                                    <div class="label-text">Repassword</div>
                                </label>
                                <label for="email">
                                    <input id="email" type="email" required minlength="7" maxlength="50" />
                                    <div class="label-text">Email</div>
                                </label>
                                <label for="nickname">
                                    <input id="nickname" type="text" minlength="4" maxlength="14" />
                                    <div class="label-text">Nickname</div>
                                </label>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="onSubmit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>

        </div>

        <!-- Footer -->
        <?php require_once("./footer.php"); ?>




        <!-- MDB -->
        <!-- JQuery -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript" src="js/rain.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript"></script>

        <script>
            function post() {
                $("input").attr("disabled", "disabled");
                $("select").attr("disabled", "disabled");
                $("button").attr("disabled", "disabled");
                $("textarea").attr("disabled", "disabled");
            }

            function hasil() {
                $("input").removeAttr("disabled");
                $("select").removeAttr("disabled");
                $("button").removeAttr("disabled");
                $("textarea").removeAttr("disabled");
            }
        </script>
        <script>
            $(document).ready(function() {
                $(".onSubmit").click(function() {
                    post();
                    var username = $('#username').val();
                    var password = $('#password').val();
                    var repassword = $('#repassword').val();
                    var email = $('#email').val();
                    var nickname = $('#nickname').val();
                    $.ajax({
                        url: './backend/register.php',
                        data: {
                            username: username,
                            password: password,
                            repassword: repassword,
                            email: email,
                            nickname: nickname
                        },
                        type: 'POST',
                        dataType: 'html',
                        success: function(result) {
                            hasil();
                            $("#result").html(result);
                        }
                    });
                });
            });
        </script>
</body>

</html>