<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>KrackPot Admin Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/shared_style.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="header-fixed">
  <nav class="t-header">
    <div class="t-header-brand-wrapper">
      <a href="index.html">
        <img class="logo" src="assets/images/logo.png" alt="">
      </a>
    </div>
    <div class="t-header-content-wrapper">
      <div class="t-header-content">
        <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
          <i class="mdi mdi-menu"></i>
        </button>
        <form action="#" class="t-header-search-box">
          <div class="input-group">
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </form>
        <ul class="nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
              <i class="far fa-bell fa-fw fa-2x"></i>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
              <div class="dropdown-header">
                <h6 class="dropdown-title">Notifications</h6>
                <p class="dropdown-title-text">You have 4 unread notification</p>
              </div>
              <div class="dropdown-body">
                <div class="dropdown-list">
                  <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                    <i class="mdi mdi-alert"></i>
                  </div>
                  <div class="content-wrapper">
                    <small class="name">Storage Full</small>
                    <small class="content-text">Server storage almost full</small>
                  </div>
                </div>
                <div class="dropdown-list">
                  <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                    <i class="mdi mdi-cloud-upload"></i>
                  </div>
                  <div class="content-wrapper">
                    <small class="name">Upload Completed</small>
                    <small class="content-text">3 Files uploded successfully</small>
                  </div>
                </div>
                <div class="dropdown-list">
                  <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                    <i class="mdi mdi-security"></i>
                  </div>
                  <div class="content-wrapper">
                    <small class="name">Authentication Required</small>
                    <small class="content-text">Please verify your password to continue using cloud services</small>
                  </div>
                </div>
              </div>
              <div class="dropdown-footer">
                <a href="#">View All</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- partial -->
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

        <li class="nav-category-divider">Actions</li>
        <li>
          <a href="../docs/docs.html">
            <span class="link-title">Logout</span>
            <i class="fas fa-sign-out-alt fa-fw link-icon"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- partial -->
    <div class="page-content-wrapper">
      <div class="page-content-wrapper-inner">
        <div class="content-viewport">
          <div class="row">
            <div class="col-12 py-5">
              <h4 class="dashboard-header">Dashboard</h4>
              <p class="dashboard-sub text-gray ">Welcome aboard, Aditya Nayak</p>
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