<?php include_once("../dashboard-static/includes/connectionClass.php");
    $display_query="SELECT * FROM krackpottb_demo_1 ORDER BY id DESC";
    $run_query=mysqli_query($connect,$display_query);
?>

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
                    <?php if($run_query->num_rows>0){
                                    while($row=$run_query->fetch_assoc()){
                            ?>
                    <div class="carousel-item">
                        <div class="row section-info">
                            
                            <div class="offset-1 col-lg-5 col-xl-5 col-md-12 col-sm-12 col-xs-12 section-info-main">
                                <div class="portfolio-section-list-main animated fadeInLeft">
                                
                                    <img src="../dashboard-static/uploads/<?php echo $row['brand_logo'];?>" class="clients-img">
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
                                                $query="SELECT * FROM krackpottb_demo_1 a, attachments b WHERE a.id=b.attachment_id AND a.id = ".$row['id'];
                                                $fire=mysqli_query($connect,$query);
                                                $data=mysqli_fetch_assoc($fire);
                                                $res=$data['images'];
                                                $res=explode(" ",$res);
                                                $count=count($res)-1;
                                            
                                            
                                                /*Image Loop */
                                                for($i=0;$i<$count;++$i){
                                                ?>
                                                <img src="../dashboard-static/uploads/<?php echo $res[$i] ?>" class="img-fluid rounded clients-slider-img"/>
                                                <?php }
                                                 
                                                    /*Videos */
                                                    $video = $data['video'];
                                                    $video_2 = $data['video_2'];
                                                    $video_3 = $data['video_3'];
                                                ?>
                                                <div class="iframe-container">
                                                    <?php echo $video; ?>
                                                </div>
                                                <div class="iframe-container">
                                                    <?php echo $video_2; ?>
                                                </div>
                                                <div class="iframe-container">
                                                    <?php echo $video_3; ?>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php } } ?>
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
    </script>
</body>

</html>