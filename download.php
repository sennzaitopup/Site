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
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'>
  <link rel="stylesheet" href="css/form.css">

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
<div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px; margin-top: 100px;">
            <div class="card-body">
                <h1 class="text-custom text-uppercase fw-bold">Download</h1>
                <p class="text-custom fw-bold">Pro tip: Turn off your antivirus before installing!</p>
                <hr>
                <div class="register-account">
                    <div id="result"></div>
                    <div class="text-custom text-center">
                        Google Drive | Client | 03/11/2021
                    </div>
                    <div class="d-flex justify-content-center">
           <a class="onSubmit" href="http://cdn.foreversystem.xyz/ClientDownload/ForeverLS%20Full%20ClientX%2011-3-2021.zip
">
             Download Here
           </a>
                    </div>
					
                    <div class="text-custom text-center">
                        Google Drive | Manual Patch | 02/11/2021
                    </div>
                    <div class="d-flex justify-content-center">
           <a class="onSubmit" href="https://drive.google.com/file/d/1OPtDdmAWPeaFej1DNo3ZVXnEJcsoiMIs/view?usp=sharing">
             Download Here
           </a>
                    </div>
					
                    <div class="text-custom text-center">
                        Discord | Launcher | Latest
                    </div>
                    <div class="d-flex justify-content-center">
           <a class="onSubmit" href="https://cdn.discordapp.com/attachments/893676365558202428/894794741932245012/Launcher_Fix.zip
">
             Download Here
           </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Footer -->
        <?php require_once("./footer.php"); ?>