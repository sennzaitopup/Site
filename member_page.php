<?php

error_reporting(0);

session_start();

$Data = $_SESSION['username'];

if ($Data == "") {
  header('location: ./login.php');
}

require_once("./config/connect.php");

$query = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE userID = '$Data'");
while ($row = odbc_fetch_object($query)) {
  $nickname = $row->nickName;
  $email = $row->email;
  $verify = $row->verify;
}

if ($verify != "t") {
  header('Location: ./verify.php');
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

    <!-- Side Bar -->
    <?php require_once("./page/side_bar.php"); ?>


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
    function buka(nama) {
      let timerInterval
      Swal.fire({
        title: 'Loading',
        html: 'Please wait.',
        timer: 1000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
          timerInterval = setInterval(() => {
            const content = Swal.getHtmlContainer()
            if (content) {
              const b = content.querySelector('b')
              if (b) {
                b.textContent = Swal.getTimerLeft()
              }
            }
          }, 100)
        },
        willClose: () => {
          clearInterval(timerInterval)
        }
      }).then((result) => {
        if (result.dismiss === Swal.DismissReason.timer) {
          $.ajax({
            url: nama + '.php',
            type: 'GET',
            dataType: 'html',
            success: function(isi) {
              $("#konten").html(isi);
            },
          });
        }
      })
    }
  </script>
</body>

</html>