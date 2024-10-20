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

  <div class="container">

    <!-- Stars Effect Started -->
    <?php require_once("./stars.php"); ?>
    <!-- Stars Effect Ended -->

    <!-- Select Game Server -->
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center text-white">
      <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px;">
        <div class="card-body">
          <h1 class="text-custom  text-uppercase">Select your game</h1>
          <p class="fw-bold text-custom  text-uppercase">We have a 2 different Server. Lost Forever & Lost Forever Evolution.</p>
          <div class="row">
            <!-- Lost Season 1 Start -->
            <div class="col-md-6 mb-5">
              <div class="card" style="background: hsl(204 100% 5%); border-radius: 15px;">
                <div class="card-body" style="padding: 35px;">
                  <div class="d-flex justify-content-center">
                    <img src="https://forever-ls.com/img/logoselect1.png" class="mb-3 img-fluid" style="border-radius: 50px;">
                  </div>
                  <div class="d-flex justify-content-center">
                    <a class="fw-bold text-custom fs-2 text-center"> Lost Forever</a>
                  </div>
                  <p class="fw-bold text-white">Forever LostSaga is the first LostSaga in Forever LostSaga. There is Custom content in Reborn Forever LostSaga.</p>
                  <div class="d-flex justify-content-center">
                    <div class="px-5">
                      <a href="./index.php" class="animated-button1 rounded">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Go to website!
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Lost Season 2 / Evolution Start -->
            <div class="col-md-6 mb-5">
              <div class="card" style="background: hsl(204 100% 5%); border-radius: 15px;">
                <div class="card-body" style="padding: 35px;">
                  <div class="d-flex justify-content-center">
                    <img src="https://forever-ls.com/img/logoselect2.png" class="mb-3 img-fluid" style="border-radius: 50px;">
                  </div>
                  <div class="d-flex justify-content-center">
                    <a class="fw-bold text-custom fs-2 text-center"> Lost Evolution</a>
                  </div>
                  <p class="fw-bold text-white">Evolution Forever LostSaga is the second LostSaga in Forever LostSaga. There is no Custom content in Evolution Forever LostSaga.</p>
                  <div class="d-flex justify-content-center">
                    <div class="px-5">
                      <a href="javascript:;" onclick="alert('Coming soong :)');" class="animated-button1 rounded">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Go to website!
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
</body>

</html>