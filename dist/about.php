<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dashboard/assets/images/favicon-32x32.png">
</head>

<body>
    <div class="section ">
        <nav class="navbar">
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
                                        <div class="row section-info ">
                                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 section-info-main">
                                                <h1 class="sub-text">Weird and Wise</h1>
                                                <h1 class="main-text">Together Make<br>Krackpot Click!</h1>
                                            </div>
                                            <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-xs-12 section-mobile-hide section-info-main">
                                                <img src="images/info.svg" alt="about" class="section-info-img">
                                                <h1 class="section-info-head">About</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item animate__animated animate__fadeInRight animate__delay-1s">
                                        <div class="row section-info">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 second-section section-info-main">
                                                    <p class="section-info-description">
                                                            We are a bunch of creative yet left brain driven advertising & marketing
                                                            buffs. Our logic goes in parellel with our imaginations and ideas.
                                                            With 07 years of experience in building great work for awesome clients, now
                                                            we step into a world that is waking up to the power of new-age marketing drivers.
                                                            Designers, digital marketing experts, strategists and <br><span class="center-text">content-creators - we
                                                                are all huddled together to win all
                                                            </span>                                                 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               <?php include('includes/carousel-controls.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
       <?php include('includes/footer.php'); ?>

</body>

</html>