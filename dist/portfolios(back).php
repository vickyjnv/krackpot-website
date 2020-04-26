<?php include('../dashboard/includes/connectionClass.php'); ?>
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
                <?php
                
                    $connect = mysqli_connect("localhost","root","","krackpot");

                    function make_query($connect){
                        $display_query ="SELECT * FROM krackpottb ORDER BY id DESC" ;
                        $display_query_result = mysqli_query($connect,$display_query);
                        return $display_query_result;
                    }

                    /* function files_query($connect){
                        $display_files_query ="SELECT * FROM krackpotbrandimages" ;
                        $display_files_query_result = mysqli_query($connect,$display_files_query);
                        return $display_files_query_result;
                    } */

                    function make_slides($connect){
                        $output = '';
                        $count = 0;
                        $result = make_query($connect);
                            while($row = mysqli_fetch_assoc($result)){
                                if($count == 0){
                                    $output .= '<div class="carousel-item active">
                                    <div class="row section-info">
                                    <div class="offset-1 col-lg-5 col-xl-5 col-md-12 col-sm-12 col-xs-12 section-info-main">
                                    <div class="portfolio-section-list-main animated fadeInLeft">';
                                }
                                else{
                                    $output .='</div></div></div></div>
                                            <div class="carousel-item"> 
                                            <div class="row section-info">
                                            <div class="offset-1 col-lg-5 col-xl-5 col-md-12 col-sm-12 col-xs-12 section-info-main">
                                            <div class="portfolio-section-list-main animated fadeInLeft">
                                            ';
                                } 
                                $output .='<img src="../dashboard/uploads/'.$row['brand_logo'].'" class="clients-img">
                                    <p class="clients-description">'.$row['brand_description'].'</p>
                                    <h1 class="work-text -title">'.$row['brand_work_header'].'</h1>
                                    <h1 class="work-text -subtitle">'.$row['brand_work_description'].'</h1>';
                                    
                                    $count = $count + 1;
                            }
                        return $output;
                        }
                ?>
                        <?php echo make_slides($connect); ?>

                        <?php 

                            function make_files_query($connect){
                                $output = '';
                                $count = 0;
                                $result = files_query($connect);
                                    while($row = mysqli_fetch_assoc($result)){
                                        if($count == 0){
                                            $output .= '<div id="clients-slider" class="clients-slider">';
                                        }
                                        else{
                                            $output .='</div></div></div>
                                                    ';
                                        } 
                                        $output .='<img src="../dashboard/uploads/'.$row['Image'].'" class="clients-slider-img">';
                                            
                                            $count = $count + 1;
                                    }
                                return $output;
                                }

                        ?>
                        
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