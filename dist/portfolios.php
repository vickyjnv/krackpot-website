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
    <div class="section portfolio-section-list">
        <nav class="navbar navbar-portfolio-list">
            <?php include('includes/sidebar.php') ?>

        </nav>
        <div class="container-fluid">
            <div id="section-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row section-info">
                            <div class="offset-1 col-lg-5 col-xl-5 col-md-12 col-sm-12 col-xs-12 section-info-main">
                                <div class="animated fadeInLeft">
                                    <div class="portfolio-section-list-main animated fadeInLeft">
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
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 section-info-main col-gap">
                                <div class="section-info-start animated fadeInRight">
                                    <div id="clients-slider" class="clients-slider">
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
                                        <!-- <div class="clients-slider-inner">
                                            <iframe class="clients-slider-videos"
                                                src="https://www.youtube.com/embed/uE1m21Umn0s" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row section-info">
                            <div class="offset-1 col-lg-5 col-xl-5 col-md-12 col-sm-12 col-xs-12 section-info-main">
                                <div class="animated fadeInLeft">
                                    <div class="portfolio-section-list-main animated fadeInLeft">
                                        <img src="images/clients/cravatax_brands_logo.png" alt="" class="clients-img">
                                        <p class="clients-description">"Cravatex Brands is a distribution platform for
                                            lifestyle, sports & wellness products. Cravatex Brands strengths lie in
                                            licensing, distribution & product development.Aiming to be a leading player
                                            in the lifestyle, sports & wellness markets
                                            by partnering with incredible brands & leveraging a platform in India & the
                                            sub-continent"
                                        </p>

                                        <h1 class="work-text -title">Designed & Developed</h1>
                                        <h1 class="work-text -subtitle">Parallax Website
                                        </h1>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 section-info-main col-gap">
                                <div class="section-info-start animated fadeInRight">
                                    <div id="clients-slider" class="clients-slider">
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

    
    <?php include('includes/footer.php') ?>

    <script>
        $(document).ready(function () {
            $('.clients-slider').slick({
                slidesToShow: 5,
                infinite: true,
                slidesToScroll: 1,
                arrows: true,
                speed: 800,
                prevArrow: '<button class="slide-arrow prev-arrow fas fa-chevron-left"></button>',
                nextArrow: '<button class="slide-arrow next-arrow fas fa-chevron-right"></button>',
            })
        });
    </script>
</body>

</html>