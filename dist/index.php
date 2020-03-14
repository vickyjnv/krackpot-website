<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRACKPOT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
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
                <li class="list-item"><a href="about-us.php">About Us</a></li>
                <li class="list-item"><a href="services.php">Services</a></li>
                <li class="list-item"><a href="clients.php">Clients</a></li>
                <li class="list-item"><a href="portfolio.php">Portfolio</a></li>
                <li class="list-item"><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        <img src="images/logo.png" alt="" class="logo animated bounceInDown">
    </div>

   <?php include('includes/footer.php'); ?>
</body>

</html>