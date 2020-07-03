<?php include('../dashboard/includes/connectionClass.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dashboard/assets/images/favicon-32x32.png">
</head>

<body>
    <div class="section clients-section">
        <nav class="navbar navbar-clients fixed-top">
            <?php include('includes/sidebar.php'); ?>
        </nav>
        <div class="container">
                    <div class="row ">
                        <div class="col-lg-12">
         <div id="section-carousel" class="carousel slide" data-ride="carousel"
                    data-interval="false">
                    <?php include('includes/carousel-indicators.php'); ?>
                    <div class="carousel-inner">
                    <div class="carousel-item active animate__animated animate__fadeInLeft animate__delay-1s">
                        <div class="container">
                        <div class="row section-info section-info-viewport">
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 section-info-main">
                                <h1 class="sub-text">Everybody needs a miracle,</h1>
                                <h1 class="main-text">and nothing crazy at all for Krackpot.</h1>
                            </div>
                            <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-xs-12 section-mobile-hide section-info-main">
                                <img src="images/clients.svg" alt="clients" class="section-info-img">
                                <h1 class="section-info-head">Clients</h1>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row section-info">
                            <div class="col-12 second-section section-info-main section-info-viewport">
                                 <p class="section-info-description">
                                   Krackpot Design and Digital Solutions helps businesses establish growth
                                   trhough simplified user interactions designs. In this multi-channel
                                   world, companies need innovation ideas to connect with their audience; that's
                                   where we can help you address almost all issues in Design domain. We build digital 
                                   products and experiences that create lasting value and sustainable growth for modern 
                                   business. With strong Design and Digital DNA, Krackpot commits itself to amaze you
                                   with Creative Digital ideas fulfilling your Digital Marketing needs. Be it Website,
                                    Mobile App or Social Media, we've got it all. Our cretive digital products 
                                    products have proved to deliver performance<br><span class="center-text">over the years
                                    and we promise to continue to do so.
                                    </span>                                                 
                                </p>

                                <a href="clients.php" class="clients-btn">Click Here To View Our Clients</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php include('includes/carousel-controls.php'); ?>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</body>

</html>