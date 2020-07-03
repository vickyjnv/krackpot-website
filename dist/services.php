<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dashboard/assets/images/favicon-32x32.png">
</head>

<body>
    <div class="section services-section">
        <nav class="navbar navbar-services">
        <?php include('includes/sidebar.php'); ?>
        </nav>
                <div id="section-carousel" class="carousel slide" data-ride="carousel"
                    data-interval="false">
                    <?php include('includes/carousel-indicators.php'); ?>
                    <div class="carousel-inner">
                        <div class="carousel-item active animate__animated animate__fadeInLeft animate__delay-1s">
                            <div class="container">
                            <div class="row section-info">
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 section-info-main">
                                    <h1 class="sub-text">There is a story and a moral,</h1>
                                    <h1 class="main-text">and then there is a<br>Krackpot storyteller!</h1>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-xs-12 section-mobile-hide section-info-main">
                                    <img src="images/services.svg" alt="about" class="section-info-img">
                                    <h1 class="section-info-head">Services</h1>
                                </div>
                            </div>
                            </div>
                        </div>
                    <div class="carousel-item">
                    <div class="second-section animated fadeInRight">
                        <div class="services-container">
                            <div id="one" class="section">
                                <div class="content content-one">
                                    <img src="images/design.svg" alt="" class="content-img">
                                    <h1 class="content-head">Designing</h1>
                                    <a href="#" id="content-description-btn" class="content-one-link content-link">Know
                                        More</a>
                                </div>
                                <ul class="section-list" id="list-one">
                                    <li>Website</li>
                                    <li>UI/UX, Apps</li>
                                    <li>Web Banners</li>
                                    <li>Programmatic Banners</li>
                                    <li>Banners Adaptations</li>
                                    <li>Branding</li>
                                    <li>Social Media</li>
                                    <li>Emailer</li>
                                    <li>Newsletter</li>
                                    <li>Infographic</li>
                                </ul>
                            </div>
                            <div id="two" class="section">
                                <div class="content content-two">
                                    <img src="images/development.svg" alt="" class="content-img">
                                    <h1 class="content-head">Development</h1>
                                    <a href="#" id="content-description-btn" class="content-two-link content-link">Know
                                        More</a>
                                </div>

                                <ul class="section-list" id="list-two">
                                    <li>Website</li>
                                    <li>UI/UX, Apps</li>
                                    <li>Web Banners</li>
                                    <li>Programmatic Banners</li>
                                    <li>Banners Adaptations</li>
                                    <li>Emailer</li>
                                    <li>Newsletter</li>
                                </ul>
                            </div>
                            <div id="three" class="section">
                                <div class="content content-three">
                                    <img src="images/digital-marketing.svg" alt="" class="content-img">
                                    <h1 class="content-head">Digital Marketing</h1>
                                    <a href="#" id="content-description-btn"
                                        class="content-three-link content-link">Know More</a>
                                </div>

                                <ul class="section-list" id="list-three">
                                    <li>Online Ads</li>
                                    <li>Influencer Marketing</li>
                                    <li>Social Media Marketing</li>
                                    <li>Content Creation</li>
                                    <li>Strategy</li>
                                    <li>Execution</li>
                                    <li>Online Reputation Management</li>
                                </ul>
                            </div>
                            <div id="four" class="section">
                                <div class="content content-four">
                                    <img src="images/pr.svg" alt="" class="content-img">

                                    <h1 class="content-head">Online PR</h1>
                                    <a href="#" id="content-description-btn" class="content-four-link content-link">Know
                                        More</a>
                                </div>
                                <ul class="section-list" id="list-four">
                                    <li>Tradition PR</li>
                                    <li>Online PR</li>
                                </ul>
                            </div>
                            <div id="five" class="section">
                                <div class="content content-five">
                                    <img src="images/video-editing.svg" alt="" class="content-img">
                                    <h1 class="content-head">Video Editing</h1>
                                    <a href="#" id="content-description-btn" class="content-five-link content-link">Know
                                        More</a>
                                </div>
                                <ul class="section-list" id="list-five">
                                    <li>Video Banner</li>
                                    <li>Video Resizing</li>
                                </ul>
                            </div>
                            <div id="six" class="section">
                                <div class="content content-six">
                                    <img src="images/av.svg" alt="" class="content-img">
                                    <h1 class="content-head">AV Presentation</h1>
                                    <a href="#" id="content-description-btn" class="content-six-link content-link">Know
                                        More</a>
                                </div>

                                <ul class="section-list" id="list-six">
                                    <li>Designing</li>
                                    <li>Animated Presentation</li>
                                    <li>VO Presentation</li>
                                    <li>Audio Editing</li>
                                    <li>Infographic Video</li>
                                    <li>Presentations</li>
                                </ul>
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