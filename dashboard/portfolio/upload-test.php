<?php include('../includes/connectionClass.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Upload Portfolio (Images & Videos)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-32x32.png">
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
                            
                        </div>
                    </div>
                </div>
            </div>
           <div id="portfolio-section" class="mt-4">
                <div class="portfolio-section-wrap">
                    <h1 class="portfolio-section-head">Step 2 (Upload Images And Video)</h1>
                </div>
                <form action="upload-test.php" method="POST" id="portfolio-form" name="form"
                    enctype="multipart/form-data" class="form-wrapper">
                        <div class="form-group">
                            <label for="brand-logo">Upload Brand Images</label>
                            <div class="file-upload-wrapper" data-text="Drag & Drop Or Click To Upload Multiple Images">
                                <input name="brand-images[]" type="file" class="file-upload-field" id="brand-images"
                                    multiple>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label for="local-video-one">Local Video One</label>
                                    <div class="file-upload-wrapper" data-text="Drag & Drop Or Click To Upload Video">
                                        <input name="local-video-one" type="file" class="file-upload-field" id="local-video-one">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label for="local-video-two">Local Video Two</label>
                                    <div class="file-upload-wrapper" data-text="Drag & Drop Or Click To Upload Video">
                                        <input name="local-video-two" type="file" class="file-upload-field" id="local-video-two">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label for="local-video-three">Local Video Three</label>
                                    <div class="file-upload-wrapper" data-text="Drag & Drop Or Click To Upload Video">
                                        <input name="local-video-three" type="file" class="file-upload-field" id="local-video-three">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="pinline"><span>Or Upload Youtube Video</span></h2>

                        <div class="form-group">
                            <label for="yt-link">Video Link</label>
                            <input type="text" name="brand-yt-link" id="yt-link" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="yt-link">Video Link</label>
                            <input type="text" name="brand-yt-link_2" id="yt-link_2" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="yt-link">Video Link</label>
                            <input type="text" name="brand-yt-link_3" id="yt-link_3" class="form-control">
                        </div>
                        <div class="button">
                            <input type="submit" name="upload-portfolio" value="Upload Portfolio" class="mt-8 form-wrapper-btn">
                        </div>

                        <?php

                        /*Getting Last Uploaded ID */
                            $selectquery="SELECT id FROM krackpot_tb ORDER BY id DESC LIMIT 1";
                            $result = mysqli_query($connect,$selectquery);
                            $row = $result->fetch_assoc();
                            if ($row > 0) {
                                $id = $row['id'];
                            } else {
                                echo "Error";
                            }

                            /*MultiUpload Image & Youtube Videos */
                            if(isset($_POST['upload-portfolio'])){
                                $permitted = array('jpg','jpeg','png','gif','svg','mp4','mov','webm','avi');
                                $file='';
                                $file_tmp='';
                                $location="uploads/";
                                $data='';
                                foreach($_FILES['brand-images']['name'] as $key=>$val){
                                    $file=$_FILES['brand-images']['name'][$key];
                                    $file_tmp=$_FILES['brand-images']['tmp_name'][$key];
                                    move_uploaded_file($file_tmp,$location.substr(md5(time()),0,30).$file);
                                    $data .=substr(md5(time()),0,30).$file." ";
                                }
                                $brand_youtube_video_link = $_POST['brand-yt-link'];
                                $brand_youtube_video_link_2 = $_POST['brand-yt-link_2'];
                                $brand_youtube_video_link_3 = $_POST['brand-yt-link_3'];

                                /*Local Video Section */
                                $video_file_one=$_FILES['local-video-one']['name'];
                                $video_file_one_tmp=$_FILES['local-video-one']['tmp_name'];

                                $video_file_two=$_FILES['local-video-two']['name'];
                                $video_file_two_tmp=$_FILES['local-video-two']['tmp_name'];

                                $video_file_three=$_FILES['local-video-three']['name'];
                                $video_file_three_tmp=$_FILES['local-video-three']['tmp_name'];

                                $video_location = "video_uploads/";
                                move_uploaded_file($video_file_one_tmp,$video_location.substr(md5(time()),0,10).$video_file_one);
                                $video_data .=substr(md5(time()),0,10).$video_file_one;

                                move_uploaded_file($video_file_two_tmp,$video_location.substr(md5(time()),0,10).$video_file_two);
                                $video_data_two .=substr(md5(time()),0,10).$video_file_two;

                                move_uploaded_file($video_file_three_tmp,$video_location.substr(md5(time()),0,10).$video_file_three);
                                $video_data_three .=substr(md5(time()),0,10).$video_file_three;

                                $add_query_attachments_table = "INSERT INTO attachments (images,video,video_2,video_3,local_video_one,local_video_two,
                                local_video_three,attachment_id) VALUES ('{$data}','{$brand_youtube_video_link}','{$brand_youtube_video_link_2}'
                                ,'{$brand_youtube_video_link_3}','{$video_data}','{$video_data_two}','{$video_data_three}','{$id}')";
                                $add_query_attachments_table_result = mysqli_query($connect,$add_query_attachments_table);

                                if(!$add_query_attachments_table_result){
                                    die(mysqli_error($connect));
                                }else{
                                    echo '<div class="alert alert-success h2 mt-3" role="alert">
                                                Portfolio Uploaded
                                            </div>';
                                }
                            }
                        ?>
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