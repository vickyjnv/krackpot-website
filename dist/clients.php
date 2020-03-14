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
</head>

<body>
    <div class="section clients-section">
        <nav class="navbar navbar-clients">
            <?php include('includes/sidebar.php'); ?>
        </nav>
        <div id="section-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <?php include('includes/carousel-indicators.php'); ?>
            <div class="carousel-inner">
                <div class="carousel-item container active">
                    <div class="row section-info">
                        <div class="offset-1 col-lg-5 col-xl-5 col-md-5 col-sm-12 col-xs-12 section-info-main">
                            <div class="section-info-main  animated fadeInLeft">
                                <h1 class="section-info-text _title">
                                    Design & Digital<br>
                                    Agency providing
                                </h1>
                                <h3 class="section-info-text  _subtitle">
                                    end to end creative &<br>
                                    marketing solutions
                                </h3>
                            </div>
                        </div>
                        <div
                            class="col-lg-5 col-xl-5 col-md-5 col-sm-12 col-xs-12 offset-1 section-mobile-hide section-info-main">
                            <div class="animated fadeInRight ">
                                <img src="images/clients.svg" alt="clients" class="section-info-img">
                                <h1 class="section-info-head">Clients</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row section-info">
                        <div class="col-12 container-fluid section-info-clients ">
                            <div class="  animated fadeInRight">
                                <div class="clients-row">
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/01.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/02.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/03.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/04.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/05.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/06.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/07.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/08.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/09.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/10.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/11.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/12.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/13.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/14.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/15.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/16.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/17.png" alt="" class="clients-img">
                                    </div>
                                    <div class="clients-row-inner-columns">
                                        <img src="images/clients/18.png" alt="" class="clients-img">
                                    </div>
                                </div>
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