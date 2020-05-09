<?php include('../includes/connectionClass.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Portfolio (Step 1)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-32x32.png">

</head>

<body class="header-fixed">
    <?php include('../includes/header.php'); ?>
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
            <div id="portfolio-section" class="mt-4">
                <div class="portfolio-section-wrap">
                    <h1 class="portfolio-section-head">Step 1 (Clients Brand Information) </h1>
                </div>
                <form action="#" method="POST" id="portfolio-form" name="form" enctype="multipart/form-data" class="form-wrapper">
                        <div class="form-group">
                            <label for="brand-logo">Upload Logo</label>
                            <div class="file-upload-wrapper" data-text="Select your file!">
                                <input name="brand-logo" type="file" class="file-upload-field" id="brand-logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="brand-logo">Brand Description</label>
                            <textarea name="brand-description" id="description-editor" class="form-control" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="work-header"> Work Details (i.e Design Or Developed)</label>
                            <input type="text" name="brand-work-header" id="work-header" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="work-description"> Work Description</label>
                            <input type="text" name="brand-work-description" id="work-description" class="form-control" >
                        </div>
                        <div class="button">
                            <input type="submit" name="info-submit" value="Proceed To Upload Images And Video"
                                class="form-wrapper-btn mt-8">
                        </div>

                    <?php

                        if(isset($_POST['info-submit'])){
                        /* $id = $_POST['id']; */
                        $permitted = array('jpg','jpeg','png','gif');
                        $brand_logo = $_FILES['brand-logo']['name'];
                        $brand_logo_temp = $_FILES['brand-logo']['tmp_name'];
                        $brand_description = $_POST['brand-description'];
                        $brand_work_header = $_POST['brand-work-header'];
                        $brand_work_description = $_POST['brand-work-description'];
                        $date = date('d-m-y');

                        //Image Function
                        $image_function = explode('.',$brand_logo);
                        $file_ext = strtolower(end($image_function));
                        $random_image_name  = substr(md5(time()),0,15).'.'.$file_ext;
                        $uploaded_image = "../uploads/".$random_image_name;
                        move_uploaded_file($brand_logo_temp,$uploaded_image);

                        //Insert Query (For Details Table)
                        $add_query = "INSERT INTO krackpottb_demo_1 (brand_logo,brand_description,brand_work_header,
                        brand_work_description,date_of_upload) VALUES ('{$uploaded_image}','{$brand_description}',
                        '{$brand_work_header}','{$brand_work_description}',now())";

                        $add_query_result = mysqli_query($connect,$add_query);

                        if(!$add_query_result){
                            die("Something Went Wrong".mysqli_error($connect));
                        }else{
                            echo "<script type='text/javascript'> window.location='upload.php'; </script>";
                        }

                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>       

    <script src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="../assets/script/core.js"></script>
    <script src="../assets/script/template.js"></script>
    <script src="https://kit.fontawesome.com/7fdc918442.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('description-editor');
    </script>
</body>

</html>