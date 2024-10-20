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


    <!-- Card Background -->
    <?php require_once("./card.php"); ?>

    <!-- Services -->
    <?php require_once("./services.php"); ?>

    <!-- Developer -->
    <?php require_once("./developer.php"); ?>

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
</body>

</html>