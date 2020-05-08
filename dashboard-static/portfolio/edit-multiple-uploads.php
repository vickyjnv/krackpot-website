<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="header-fixed">
  <?php include('../includes/header.php'); ?>
  <!-- Main Body -->
  <div class="page-body">
    <?php include('../includes/sidebar.php'); ?>
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h4 class="dashboard-header">Add New Portfolio</h4>
                            <p class="dashboard-sub text-gray ">Fill The Following Multi-Step Form To Display Portfolio
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="portfolio-section">
                <ul class="steps">
                    <li class="is-active">Step 2 (Upload Images And Video)</li>
                </ul>

                <?php
                    //Getting Id
                    if(isset($_GET['edit'])){
                        $id = $_GET["edit"];
                    }
                ?>
                <form action="#" method="POST" id="portfolio-form" name="form"
                    enctype="multipart/form-data" class="form-wrapper">
                    <fieldset class="section is-active">
                    <h3 class="prev-text">Previously Uploaded Images</h3>
                    <?php 
                        $i="";
                        $query="SELECT * FROM krackpottb_demo_1 a, attachments b WHERE a.id=b.attachment_id AND a.id = $id";
                        $fire=mysqli_query($connect,$query);
                        while($resultsn=mysqli_fetch_assoc($fire)){
                            $i='';
                            $fetch_img =  $resultsn['images'];
                            $tempr = explode(' ',$fetch_img);
                            $count=count($tempr)-1;
                            $imgs = '';
                            for($i=0;$i<$count;++$i){
                                $imgs .= "<img src='../uploads/".$tempr[$i]."' class='uploaded-multiple-images'/>";
                            }
                    ?>
                        <div><?php echo $imgs; }?></div>
                        <div class="form-group">
                            <label for="brand-logo">Upload New Brand Images</label>
                            <div class="file-upload-wrapper" data-text="Drag & Drop Or Click To Upload Multiple Images">
                                <input name="brand-images[]" type="file" class="file-upload-field" id="brand-images"
                                    multiple>
                            </div>
                        </div>

                        <h3 class="prev-text-video">Previously Uploaded Youtube Videos</h3>

                        <?php
                        $query="SELECT * FROM krackpottb_demo_1 a, attachments b WHERE a.id=b.attachment_id AND a.id = $id";
                        $fire=mysqli_query($connect,$query);
                        while($resultsn=mysqli_fetch_assoc($fire)){   
                            $video = $resultsn['video'];
                            $video_2 = $resultsn['video_2'];
                            $video_3 = $resultsn['video_3'];
                            
                            ?>
                            <div class="uploaded-iframe"><?php echo $video; ?></div>
                            <div class="uploaded-iframe"><?php echo $video_2; ?></div>
                            <div class="uploaded-iframe"><?php echo $video_3; ?></div>
                            <?php } ?>
                        <div class="form-group">
                            <label for="yt-link"> Upload New Youtube Video Link (One)</label>
                            <input type="text" name="brand-yt-link" id="yt-link" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="yt-link"> Upload New Youtube Video Link (Two)</label>
                            <input type="text" name="brand-yt-link_2" id="yt-link_2" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="yt-link"> Upload New Youtube Video Link (Three)</label>
                            <input type="text" name="brand-yt-link_3" id="yt-link_3" class="form-control">
                        </div>
                        <div class="button">
                            <input type="submit" name="upload-portfolio" value="Update" class="form-wrapper-btn">
                        </div>

                        <?php

                        /*Getting Last Uploaded ID */
                            $selectquery="SELECT id FROM krackpottb_demo_1 ORDER BY id DESC LIMIT 1";
                            $result = mysqli_query($connect,$selectquery);
                            $row = $result->fetch_assoc();
                            if ($row > 0) {
                                $id = $row['id'];
                            } else {
                                echo "Error";
                            }

                            /*MultiUpload Image & Youtube Videos */
                            if(isset($_POST['upload-portfolio'])){
                                $file='';
                                $file_tmp='';
                                $location="../uploads/";
                                $data='';
                                foreach($_FILES['brand-images']['name'] as $key=>$val){
                                    $file=$_FILES['brand-images']['name'][$key];
                                    $file_tmp=$_FILES['brand-images']['tmp_name'][$key];
                                    move_uploaded_file($file_tmp,$location.substr(md5(time()),0,15).$file);
                                    $data .=substr(md5(time()),0,15).$file." ";
                                }
                                $brand_youtube_video_link = $_POST['brand-yt-link'];
                                $brand_youtube_video_link_2 = $_POST['brand-yt-link_2'];
                                $brand_youtube_video_link_3 = $_POST['brand-yt-link_3'];
                                
                                $add_query_attachments_table = "UPDATE attachments SET images = '{$data}', video = '{$brand_youtube_video_link}'
                                , video_2 = '{$brand_youtube_video_link_2}', video_3 = '{$brand_youtube_video_link_3}' WHERE attachment_id = '{$id}'";
                                $add_query_attachments_table_result = mysqli_query($connect,$add_query_attachments_table);
                                if(!$add_query_attachments_table_result){
                                    die(mysqli_error($connect));
                                }else{
                                    echo '<div class="alert alert-success mt-3" role="alert">
                                                Files Updated Succesfully
                                            </div>';
                                }
                            }
                        ?>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="../assets/script/core.js"></script>
    <script src="../assets/script/template.js"></script>
    <script src="https://kit.fontawesome.com/7fdc918442.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</body>

</html>