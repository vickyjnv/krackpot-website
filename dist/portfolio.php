<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
</head>

<body>
    <nav class="navbar navbar-portfolio">
        <?php include('includes/sidebar.php'); ?>

    </nav>
    <div class="portfolio-section section-default-styling">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div id="section-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#section-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#section-carousel" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="offset-1 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-6">
                                        <div class="section-info animated fadeInLeft">
                                            <h1 class="section-info-text  _title">
                                                Design & Digital<br>
                                                Agency providing
                                            </h1>
                                            <h3 class="section-info-text  _subtitle">
                                                end to end creative &<br>
                                                marketing solutions
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 offset-1">
                                        <div class="section-info animated fadeInRight section-mobile-hide">
                                            <img src="images/portfolio.svg" alt="about" class="section-info-img">
                                            <h1 class="section-info-head">Portfolio</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="portfolio-section-main section-info second-section animated fadeInRight">
                                    <p class="section-info-description">Krackpot Design and Digital Solutions helps
                                        Krackpot Design and Digital Solutions helps businesses establish growth
                                        through simplified user interaction designs. In
                                        this multi-channel world, companies need innovative ideas to connect with
                                        their audience; that’s where we can help you
                                        address almost all issues in Design domain
                                        <br><br>
                                        We build digital products and experiences that create lasting value and
                                        sustainable growth for modern businesses. With
                                        strong Design and Digital DNA, Krackpot commits itself to amaze you with
                                        Creative Digital ideas fullfilling your Digital
                                        Marketing needs. Be it Website, Mobile App or Social Media, we’ve got it
                                        all. Our creative digital products have proved
                                        to deliver performance over the years and we promise to continue to do so.
                                    </p>
                                    <a href="portfolios.php" class="portfolio-btn">Click Here To View</a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#section-carousel" role="button" data-slide="next">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#section-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include('includes/footer.php'); ?>

</body>

</html>