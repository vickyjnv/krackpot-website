<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
<link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dashboard/assets/images/favicon-32x32.png">
</head>

<body>
    <div class="section contact-section">
        <nav class="navbar navbar-contact">
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
                                                <h1 class="sub-text">If it rings its good</h1>
                                                <h1 class="main-text">If it drops in mailbox,<br>better</h1>
                                            </div>
                                            <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-xs-12 section-mobile-hide section-info-main">
                                                <img src="images/contact.svg" alt="contact" class="section-info-img">
                                                <h1 class="section-info-head">Contact</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item animate__animated animate__fadeInRight animate__delay-1s">
                                        <div class="section-info">
                                            <div class="grid-section">
                                                <div class="col-grid-one second-section section-info-main">
                                                    <h1 class="contact-main-text">Susmita Basu Nayak</h1>
                                                    <h1 class="contact-sub-text">Founder & Director - Operations</h1>
                                                    <h1 class="contact-sub-text">susmita@krackpot.co.in</h1>
                                                    <h1 class="contact-sub-text">+91 83695 28385</h1>
                                                </div>
                                                <div class="col-grid-two second-section section-info-main section-mobile-hide">
                                                </div>
                                                <div class="col-grid-three second-section section-info-main">
                                                        <h1 class="contact-main-text">Aditya Nayak</h1>
                                                        <h1 class="contact-sub-text">Director - Creative</h1>
                                                        <h1 class="contact-sub-text">aditya@krackpot.co.in</h1>
                                                        <h1 class="contact-sub-text">+91 90040 39911</h1>
                                                    </div>
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