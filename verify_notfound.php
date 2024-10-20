<?php
error_reporting(0);
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
            <!-- Ping Server -->
            <div class="col-md-12">
                <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px;">
                    <div class="card-body">
                        <div class="text-uppercase fw-bold px-5">
                            <h1 class="text-custom">Verification Failed</h1>
                            <p class="text-custom">Your account cannot be verified.
                            </p>
                            <hr>
                            <p class="text-custom fw-bold fs-1 text-center">Invalid Token Request.</p>
                            <div class="d-flex justify-content-center">
                                <img src="./img/close.png" class="mb-3">
                            </div>
                            <p class="fw-bold text-custom text-center">We cant find this token and validating your request. <br>Please check your email again, and click the link.</p>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>

        </div>

        <!-- Footer -->
        <?php require_once("./footer.php"); ?>


        <!-- Ping Server JQUery -->
        <script>
            setInterval(function() {
                $('#ping').load('./server_info/ping.php');
                $('#total_account').load('./server_info/total_account.php');
                $('#total_guild').load('./server_info/total_guild.php');
                $('#total_online').load('./server_info/total_online.php');
                $('#total_f-cash').load('./server_info/total_cash.php');
            }, 1000);
        </script>

        <!--MDB-->
        <!--JQuery-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript" src="js/rain.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript"></script>
</body>

</html>