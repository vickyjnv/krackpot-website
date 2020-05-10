<?php include('includes/connectionClass.php'); ?>
<?php 

  session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role'])){
		  header('location:../dist/login/login.php');
		exit;
	}		

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>KrackPot Admin Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-16x16.png">
</head>

<body class="header-fixed">
<nav class="t-header">
    <div class="t-header-brand-wrapper">
      <a href="index.php">
        <img class="logo" src="assets/images/logo.png" alt="">
      </a>
    </div>
    <div class="t-header-content-wrapper">
      <div class="t-header-content">
        <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
          <i class="fas fa-bars fa-2x fa-fw"></i>
        </button>
        <p class="dashboard-sub text-gray display-mobile-hide">Welcome aboard, Aditya Nayak</p>

        <ul class="nav ml-auto">
        </ul>
        <a href="../dist/login/login.php?logout=true" class="button button-common button-logout">Logout</a>
      </div>
    </div>
  </nav>  <!-- Main Body -->
  <div class="page-body">
    <div class="sidebar">
      <div class="user-profile">
        <img class="profile-img img-lg rounded-circle" src="assets/images/avatar.png" alt="profile image">
        <div class="info-wrapper">
          <p class="user-name">Aditya Nayak</p>
          <h6 class="display-role">Director</h6>
        </div>
      </div>

      <ul class="navigation-menu">
        <li class="nav-category-divider">MAIN</li>
        <li>
          <a href="index.php">
            <span class="link-title">Dashboard</span>
            <i class="fas fa-tachometer-alt fa-fw link-icon"></i>
          </a>
        </li>
        <li>
          <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
            <span class="link-title">Portfolio Pages</span>
            <i class="far fa-clipboard link-icon fa-fw"></i>
          </a>
          <ul class="collapse navigation-submenu" id="sample-pages">
            <li>
              <a href="portfolio/add-portfolio.php" target="_blank"><i class="fas fa-plus-circle fa-fw"></i> Add
                Portfolio</a>
            </li>
            <li>
              <a href="portfolio/view-portfolio.php" target="_blank"><i class="fas fa-briefcase fa-fw"></i> View All
                Portfolios</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
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
                   <?php
                        
                      $display_no_of_rows_query = "SELECT * FROM krackpottb_demo_1";
                      $display_no_of_rows_query_result = mysqli_query($connect,$display_no_of_rows_query);

                      $rows_count = mysqli_num_rows($display_no_of_rows_query_result);                        
                    ?>
                    <p class="h3">All Portfolios (<?php echo $rows_count ?>)</p>
                    <img src="assets/images/work.svg" alt="" height="80">
                  </div>  
                </div>
                </div>
              </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="grid">
                <div class="grid-body text-gray">
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="h3">Images Uploaded </p>
                    <img src="assets/images/photo.svg" alt="" height="80">
                  </div>
              </div>
            </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
              <div class="grid">
                <div class="grid-body text-gray">
                  <div class="d-flex justify-content-between align-items-center">
                  <?php  
                      $display_no_of_rows_query = "SELECT video,video_2,video_3 FROM attachments";
                      $display_no_of_rows_query_result = mysqli_query($connect,$display_no_of_rows_query);
                      $rows_count_video = mysqli_num_rows($display_no_of_rows_query_result);                                             
                    ?>
                    <p class="h3">Videos Uploaded (<?php echo $rows_count ?>)</p>
                    <img src="assets/images/video.svg" alt="" height="80">
                  </div>
                 
                </div>
              </div>
            </div>
            <footer class="footer">
              <div class="row">
                <div class="col-sm-12 text-center text-md-left mt-3 mt-sm-0">
                  <h4 class="text-muted d-block">Copyright © 2020 <a href="http://www.krackpot.co.in"
                      target="_blank">KrackPot</a>. All rights reserved</h4>
                  <h5 class="text-gray mt-2">Handcrafted With <i class="fas fa-heart fa-1x fa-fw"></i></h5>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/script/core.js"></script>
  <script src="assets/script/custom.js"></script>
  <script src="https://kit.fontawesome.com/7fdc918442.js" crossorigin="anonymous"></script>
</body>

</html>