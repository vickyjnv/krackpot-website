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
                            <h4 class="dashboard-header">Upload More Images</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
           <div id="portfolio-section" class="mt-4">
            <?php
                    //Getting Id
                    if(isset($_GET['add'])){
                        $id = $_GET["add"];
                    }
                ?>
                <form action="#" method="POST" id="portfolio-form" name="form"
                    enctype="multipart/form-data" class="form-wrapper pt-4">
                        <div class="form-group">
                        <h3 class="prev-text">Previously Uploaded Image(s)</h3>
                    <?php 
                        $i="";
                        $query="SELECT * FROM krackpot_tb a, attachments b WHERE a.id=b.attachment_id AND a.id = '{$id}'";
                        $fire=mysqli_query($connect,$query);
                        while($resultsn=mysqli_fetch_assoc($fire)){
                            $i='';
                            $fetch_img =  $resultsn['images'];
                            $tempr = explode(' ',$fetch_img);
                            $count=count($tempr)-1;
                            $imgs = '';
                            for($i=0;$i<$count;++$i){
                                $imgs .= "<img src='uploads/".$tempr[$i]."' class='uploaded-multiple-images'/>";
                            }
                    ?>
                        <div><?php echo $imgs; }?></div>
                            <label for="brand-logo">Upload Brand Images</label>
                            <div class="file-upload-wrapper" data-text="Drag & Drop Or Click To Upload Multiple Images">
                                <input name="brand-images[]" type="file" class="file-upload-field" id="brand-images"
                                    multiple>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" name="upload-images" value="Upload Images " class="mt-8 form-wrapper-btn">
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
                            if(isset($_POST['upload-images'])){
                                $permitted = array('jpg','jpeg','png','gif');
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
                                
                                $add_query_attachments_table = "UPDATE attachments SET images = '{$data}' WHERE attachment_id = '{$id}'";
                                $add_query_attachments_table_result = mysqli_query($connect,$add_query_attachments_table);

                                if(!$add_query_attachments_table_result){
                                    die(mysqli_error($connect));
                                }else{
                                    echo '<div class="alert alert-success h2 mt-3" role="alert">
                                               Images Uploaded Succesfully
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