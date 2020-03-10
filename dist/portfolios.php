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
    <link rel="stylesheet" href="style/slick.css">
    <link rel="stylesheet" href="style/slick-theme.css">
</head>

<body>
    <nav class="navbar navbar-portfolio-list" id="scroll-hide">
                <?php include('includes/sidebar.php'); ?>

    </nav>
    <div class="container-fluid portfolio-section-list">
        <div class="section-default-styling">
            <div id="section-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="offset-1 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="portfolio-section-list-main section-info animated fadeInLeft">
                                    <img src="images/clients/fila_logo.png" alt="" class="clients-img">
                                    <p class="clients-description">Fila is an Italian sporting goods company
                                        founded in 1911 in Biella, Italy. It is one of the world's largest
                                        sportswear
                                        manufacturing companies. According to Fila, its “heritage” category
                                        has grown exponentially and is now a key business
                                        driver for the brand, with sales of the segment up 146 percent in
                                        2018.
                                    </p>
                                    <h1 class="work-text -title">Designed & Developed</h1>
                                    <h1 class="work-text -subtitle">Ecomm Website with
                                        Product Display & Payment
                                        Gateway
                                    </h1>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 col-gap">
                                <div class="section-info section-info-start animated fadeInRight">
                                    <div id="clients-slider" class="single-item clients-slider">
                                        <div class="clients-slider-inner">
                                            <img src="images/clients/0fila1.png" alt="Clients Brand Image"
                                                class="clients-slider-img">
                                        </div>
                                        <div class="clients-slider-inner">
                                            <img src="images/clients/1fila2.png" alt="Clients Brand Image"
                                                class="clients-slider-img">
                                        </div>
                                        <div class="clients-slider-inner">
                                            <img src="images/clients/2fila3.png" alt="Clients Brand Image"
                                                class="clients-slider-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="offset-1 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                <div class="portfolio-section-list-main section-info h-90 animated fadeInLeft">
                                    <img src="images/clients/cravatax_brands_logo.png" alt="" class="clients-img">
                                    <p class="clients-description">"Cravatex Brands is a distribution platform
                                        for lifestyle, sports & wellness products. Cravatex Brands strengths lie
                                        in
                                        licensing, distribution & product development.Aiming to be a leading
                                        player in the lifestyle, sports & wellness markets
                                        by partnering with incredible brands & leveraging a platform in India &
                                        the sub-continent"
                                    </p>
                                    <h1 class="work-text -title">Designed & Developed</h1>
                                    <h1 class="work-text -subtitle">Parallax Website
                                    </h1>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                <div class="section-info section-info-start h-90 animated fadeInRight">
                                    <div id="clients-slider" class="single-item clients-slider">
                                        <div class="clients-slider-inner">
                                            <img src="images/clients/0cr.png" alt="Clients Brand Image"
                                                class="clients-slider-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-actions">
                    <div class="row">
                        <div class="offset-1 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <a class="carousel-control-next clients-carousel-next" href="#section-carousel"
                                role="button" data-slide="next">
                                <span class="next-text">Next</span>
                                <span class="carousel-control-next-icon clients-carousel-next-icon "
                                    aria-hidden="true"><span class="next-text"></span></span>
                                <span class="carousel-control-next-icon clients-carousel-next-icon "
                                    aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-prev clients-carousel-prev" href="#section-carousel"
                                role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon clients-carousel-prev-icon "
                                    aria-hidden="true"><span class="next-text"></span></span>
                                <span class="carousel-control-prev-icon clients-carousel-prev-icon "
                                    aria-hidden="true"></span>
                                <span class="next-text">Previous</span>
                            </a>
                            <div class="back-to-portfolio">
                                <a href="portfolio.php" class="back-to-portfolio-btn">back to portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php include('includes/footer.php'); ?>
    
<script>

    $(document).ready(function () {
    $('.clients-slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        cssEase: 'linear',
        arrows: true,
        prevArrow: '<div class="slider-arrow slider-prev fas fa-chevron-left"></div>',
        nextArrow: '<div class="slider-arrow slider-next fas fa-chevron-right"></div>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    })
});
</script>
</body>

</html>