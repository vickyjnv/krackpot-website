<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>KrackPot Admin Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="header-fixed">
  <?php include('includes/header.php'); ?>
  <!-- Main Body -->
  <div class="page-body">
    <?php include('includes/sidebar.php'); ?>
    <div class="page-content-wrapper">
      <div class="page-content-wrapper-inner">
        <div class="content-viewport">
          <div class="row">
            <div class="col-12 py-5">
              <h4 class="dashboard-header">Dashboard</h4>
            <p class="dashboard-sub text-gray display-mobile-show">Welcome aboard, Aditya Nayak</p>

            </div>
          </div>
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="grid">
                <div class="grid-body text-gray">
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="h3">All Portfolios (12)</p>
                    <img src="assets/images/work.svg" alt="" height="80">
                  </div>
                  <!--<p class="text-black">All Portfolios</p>-->
                  <!-- <div class="wrapper w-50 mt-4">
                    <canvas height="45" id="stat-line_1"></canvas>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="grid">
                <div class="grid-body text-gray">
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="h3">Images Uploaded (1000)</p>
                    <img src="assets/images/photo.svg" alt="" height="80">
                  </div>
                  <!--<p class="text-black">All Portfolios</p>-->
                  <!-- <div class="wrapper w-50 mt-4">
                    <canvas height="45" id="stat-line_1"></canvas>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="grid">
                <div class="grid-body text-gray">
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="h3">Videos Uploaded (12)</p>
                    <img src="assets/images/video.svg" alt="" height="80">
                  </div>
                  <!--<p class="text-black">All Portfolios</p>-->
                  <!-- <div class="wrapper w-50 mt-4">
                    <canvas height="45" id="stat-line_1"></canvas>
                  </div> -->
                </div>
              </div>
            </div>
            <footer class="footer">
              <div class="row">
                <div class="col-sm-6 text-center text-sm-right order-sm-1">
                  <ul class="text-gray">
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
                <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                  <small class="text-muted d-block">Copyright © 2019 <a href="http://www.krackpot.co.in"
                      target="_blank">KrackPot</a>. All rights reserved</small>
                  <small class="text-gray mt-2">Handcrafted With <i class="fas fa-heart fa-1x fa-fw"></i></small>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/script/core.js"></script>
  <script src="assets/script/template.js"></script>
  
  <script src="https://kit.fontawesome.com/7fdc918442.js" crossorigin="anonymous"></script>

</body>

</html>