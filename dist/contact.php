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
</head>

<body>
    <div class="section contact-section">
        <nav class="navbar navbar-contact">
            <?php include('includes/sidebar.php') ?>
        </nav>

        <div class="container">
            <div class="row section-info">
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12 section-info-main">
                    <div class="section-info-main animated fadeInLeft contact-section-main">
                        <div class="contact-details">
                            <h1 class="section-info-text _name">
                                Susmita Basu Nayak
                            </h1>
                            <h1 class="section-info-text section-info-text-sub _bio">Founder & Director - Operations
                            </h1>
                            <h1 class="section-info-text section-info-text-sub _email">susmita@krackpot.co.in</h1>
                            <h1 class="section-info-text section-info-text-sub  _contact">+91 83695 28385</h1>
                        </div>
                        <div class="contact-details">
                            <h1 class=" section-info-text  _name">
                                Aditya Nayak
                            </h1>
                            <h1 class="section-info-text section-info-text-sub _bio">Director - Creative</h1>
                            <h1 class="section-info-text section-info-text-sub _email">aditya@krackpot.co.in</h1>
                            <h1 class="section-info-text section-info-text-sub _contact">+91 90040 39911</h1>
                        </div>
                    </div>
                </div>
                <div class="section-info-main col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 section-mobile-hide">
                    <div class="animated fadeInRight ">
                        <img src="images/contact.svg" alt="contact" class="section-info-img">
                        <h1 class="section-info-head">Contact</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php') ?>
</body>

</html>