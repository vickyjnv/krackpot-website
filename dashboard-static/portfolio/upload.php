<?php include('../includes/connectionClass.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/shared_style.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body class="header-fixed">
    <nav class="t-header">
        <div class="t-header-brand-wrapper">
            <a href="add-portfolio.php">
                <img class="logo" src="../assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
                <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                    <i class="mdi mdi-menu"></i>
                </button>
                <form action="#" class="t-header-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search"
                            autocomplete="off">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <ul class="nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell fa-fw fa-2x"></i>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right"
                            aria-labelledby="notificationDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Notifications</h6>
                                <p class="dropdown-title-text">You have 4 unread notification</p>
                            </div>
                            <div class="dropdown-body">
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                                        <i class="mdi mdi-alert"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Storage Full</small>
                                        <small class="content-text">Server storage almost full</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                                        <i class="mdi mdi-cloud-upload"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Upload Completed</small>
                                        <small class="content-text">3 Files uploded successfully</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                                        <i class="mdi mdi-security"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Authentication Required</small>
                                        <small class="content-text">Please verify your password to continue using cloud
                                            services</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
        <div class="sidebar">
            <div class="user-profile">
                <div class="display-avatar animated-avatar">
                    <img class="profile-img img-lg rounded-circle" src="../assets/images/avatar.png"
                        alt="profile image">
                </div>
                <div class="info-wrapper">
                    <p class="user-name">Aditya Nayak</p>
                    <h6 class="display-income">Director - Creative</h6>
                </div>
            </div>
            <ul class="navigation-menu">
                <li class="nav-category-divider">MAIN</li>
                <li>
                    <a href="index.html">
                        <span class="link-title">Dashboard</span>
                        <!--<i class="mdi mdi-gauge link-icon"></i>
 --> <i class="fas fa-tachometer-alt fa-fw link-icon"></i>
                    </a>
                </li>
                <li>
                    <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                        <span class="link-title">Portfolio Pages</span>
                        <i class="far fa-clipboard link-icon fa-fw"></i>
                    </a>
                    <ul class="collapse navigation-submenu" id="sample-pages">
                        <li>
                            <a href="pages/sample-pages/login_1.html" target="_blank">Add Portfolio</a>
                        </li>
                        <li>
                            <a href="pages/sample-pages/error_2.html" target="_blank">View All Portfolio</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-category-divider">Actions</li>
                <li>
                    <a href="../docs/docs.html">
                        <span class="link-title">Logout</span>
                        <i class="fas fa-sign-out-alt fa-fw link-icon"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- partial -->
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
                <form action="upload.php" method="POST" id="portfolio-form" name="form"
                    enctype="multipart/form-data" class="form-wrapper">
                    <fieldset class="section is-active">
                        <div class="form-group">
                            <label for="brand-logo">Upload Brand Images</label>
                            <div class="file-upload-wrapper" data-text="Drag & Drop Or Click To Upload Multiple Images">
                                <input name="brand-images[]" type="file" class="file-upload-field" id="brand-images"
                                    multiple>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="yt-link"> Youtube Video Link (One)</label>
                            <input type="text" name="brand-yt-link" id="yt-link" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="yt-link"> Youtube Video Link (Two)</label>
                            <input type="text" name="brand-yt-link_2" id="yt-link_2" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="yt-link"> Youtube Video Link (Three)</label>
                            <input type="text" name="brand-yt-link_3" id="yt-link_3" class="form-control">
                        </div>
                        <div class="button">
                            <input type="submit" name="upload-portfolio" value="Upload Portfolio" class="form-wrapper-btn">
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
                                
                                $add_query_attachments_table = "INSERT INTO attachments (images,video,video_2,video_3,attachment_id) VALUES ('{$data}','{$brand_youtube_video_link}','{$brand_youtube_video_link_2}'
                                ,'{$brand_youtube_video_link_3}','{$id}')";
                                $add_query_attachments_table_result = mysqli_query($connect,$add_query_attachments_table);

                                if(!$add_query_attachments_table_result){
                                    die(mysqli_error($connect));
                                }else{
                                    echo '<div class="alert alert-success mt-3" role="alert">
                                                Element Added Successfully!
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
    <script src="assets/script/core.js"></script>
    <script src="assets/script/template.js"></script>
    <script src="https://kit.fontawesome.com/7fdc918442.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</body>

</html>