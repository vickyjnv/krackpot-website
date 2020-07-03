<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRACKPOT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dashboard/assets/images/favicon-32x32.png">
</head>

<body>
    <div class="section hero-section ">
        <div class="side_menu">
            <div class="burger_box">
                <div class="menu-icon-container">
                    <a href="#" class="menu-icon js-menu_toggle closed">
                        <span class="menu-icon_box">
                            <span class="menu-icon_line menu-icon_line--1"></span>
                            <span class="menu-icon_line menu-icon_line--2"></span>
                            <span class="menu-icon_line menu-icon_line--3"></span>
                        </span>
                    </a>
                </div>
            </div>
            <ul class="list_load">
                <li class="list-item"><a href="index.php">Home <i class="fas fa-angle-down"></i></a></li>
                <li class="list-item"><a href="about.php">About Us</a></li>
                <li class="list-item"><a href="services.php">Services</a></li>
                <li class="list-item"><a href="client.php">Clients</a></li>
                <li class="list-item"><a href="portfolio.php">Portfolio</a></li>
                <li class="list-item"><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active animate__animated animate__fadeInLeft">
                                <div class="row align-items-center">
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <h1 class="sub-text">Crazy means Genius</h1>
                                        <h1 class="main-text">Krackpot means<br>Crazy Genius.</h1>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 section-mobile-hide">
                                        <img src="images/cover.png" alt="cover" class="cover-logo">    
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item animate__animated animate__fadeInRight animate__delay-1s">
                                <div class="row align-items-center">
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <h1 class="sub-text">Ideas are free flowing</h1>
                                        <h1 class="main-text">Krackpot makes<br>them fly.</h1>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 section-mobile-hide">
                                        <img src="images/cover.png" alt="cover" class="cover-logo">    
                                    </div>
                                </div>                            
                            </div>

                            <div class="carousel-item animate__animated animate__fadeInDown animate__delay-1s">
                                <div class="row align-items-center">
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <h1 class="sub-text">Solutions are always hidden</h1>
                                        <h1 class="main-text">Krackpot finds<br>them first.</h1>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 section-mobile-hide">
                                        <img src="images/cover.png" alt="cover" class="cover-logo">    
                                    </div>
                                </div>                            
                            </div>

                            <div class="carousel-item animate__animated animate__fadeInUp animate__delay-1s">
                                <div class="row align-items-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <img src="images/logo.png" alt="" class="logo animate__animated animate__fadeInUp">
                                    </div>
                                </div>                            
                            </div>


                        </div>
                    </div>
                </div>
        </div>
    </div>

   <?php include('includes/footer.php'); ?>
</body>

</html>