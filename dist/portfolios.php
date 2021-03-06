<?php include_once("../dashboard/includes/connectionClass.php");
    $display_query="SELECT * FROM krackpot_tb ORDER BY id DESC";
    $run_query=mysqli_query($connect,$display_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <link rel="stylesheet" href="style/slick.css">
    <link rel="stylesheet" href="style/slick-theme.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dashboard/assets/images/favicon-32x32.png">

    <style>
    .slick-track .slick-track { 
        display: none; 
    }

    </style>
</head>

<body>
    <div class="section portfolio-section-list">
        <nav class="navbar navbar-portfolio-list fixed-top">
            <?php include('includes/sidebar.php') ?>

        </nav>
            <div id="section-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner ">
                    <?php if($run_query->num_rows>0){
                            while($row=$run_query->fetch_assoc()){
                    ?>
                    <div class="carousel-item ">
                        <div class="row section-info section-info-viewport container-fluid p-0 m-0">
                            <div class="offset-1 col-lg-5 col-xl-5 col-md-12 col-sm-12 col-xs-12 section-info-main">
                                <div class="portfolio-section-list-main animated fadeInLeft">
                                
                                    <img src="../dashboard/portfolio/<?php echo $row['brand_logo'];?>" class="clients-img">
                                    <div class="clients-description"><?php echo $row['brand_description'];?></div>

                                    <h1 class="work-text -title"><?php echo $row['brand_work_header'];?></h1>
                                    <h1 class="work-text -subtitle"><?php echo $row['brand_work_description'];?>
                                    </h1>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 section-info-main col-gap">
                                <div class="section-info-start animated fadeInRight">
                                    <div id="clients-slider" class="clients-slider">
                                        
                                            <?php 
                                                $i="";
                                                $query="SELECT * FROM krackpot_tb a, attachments b WHERE a.id=b.attachment_id AND a.id = ".$row['id'];
                                                $fire=mysqli_query($connect,$query);
                                                $data=mysqli_fetch_assoc($fire);
                                                $res=$data['images'];
                                                $res=explode(" ",$res);
                                                $count=count($res)-1;
                                            

                                                /*Image Loop */
                                                for($i=0;$i<$count;++$i){
                                                ?>
                                                <img src="../dashboard/portfolio/uploads/<?php echo $res[$i] ?>" class="img-fluid rounded clients-slider-img"/>
                                                <?php }
                                                 
                                                    /*Videos */
                                                    /* $video = $data['video'];
                                                    $video_2 = $data['video_2'];
                                                    $video_3 = $data['video_3']; */
                                                ?>
                                                <!--<div class="iframe-container">
                                                </div>
                                                <div class="iframe-container">
                                                </div>
                                                <div class="iframe-container">
                                                </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php } } ?>
                </div>

                <div>
                
                </div>
                    <div class="carousel-actions">
                        <div class="row p-0 m-0">
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
                                    <a href="portfolio.php" class="back-to-portfolio-btn">Back to Portfolio</a>
                                </div>
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

        $('.carousel').carousel({
            interval:false
        });

        $(".carousel-inner .carousel-item:first-child" ).addClass('active');
        
        if($('a.carousel-item:first-child').hasClass('active'))
        {
            $('a.carousel-control-next').css('display','none');
            
        }

        $('.clients-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            $('.slick-current iframe').attr('src', $('.slick-current iframe').attr('src'));
        });

        $("#clients-slider").slick("unslick");
    </script>

</body>

</html>