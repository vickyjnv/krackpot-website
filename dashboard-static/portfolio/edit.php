<?php include('../includes/connectionClass.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Portfolio (Information)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                            <h4 class="dashboard-header">Update Portfolio</h4>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="portfolio-section">
            
                <?php
                    //Updating Query
                    if(isset($_GET['edit'])){
                        $id = $_GET["edit"];
                        $all_rows = "SELECT * FROM krackpottb_demo_1 WHERE id = $id";
                        $all_rows_result = mysqli_query($connect, $all_rows);

                        while($row = mysqli_fetch_assoc($all_rows_result)){
                            
                            $brand_logo = $row['brand_logo'];
                            $brand_description = $row['brand_description'];
                            $brand_work_header = $row['brand_work_header'];
                            $brand_work_description = $row['brand_work_description'];
                        }
                    }
                ?>

                <form action="#" method="POST" id="portfolio-form" name="form" enctype="multipart/form-data"
                    class="form-wrapper pt-4 mt-4">
                    <fieldset class="section is-active">
                        <div class="form-group">
                            <h3 class="prev-text">Previously Uploaded Logo</h3>
                            <img src="../uploads/<?php echo $brand_logo;?>" class="uploaded-image" >
                            <label for="brand-logo">Upload New Logo</label>
                            <div class="file-upload-wrapper" data-text="Select your file!">
                                <input name="brand-logo" type="file" class="file-upload-field" id="brand-logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="brand-logo">Brand Description</label>
                            <textarea name="brand-description" id="description-editor" class="form-control" required><?php echo (($brand_description)); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="work-header"> Work Details (i.e Design Or Developed)</label>
                            <input type="text" name="brand-work-header" id="work-header" value="<?php echo $brand_work_header ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="work-description"> Work Description</label>
                            <input type="text" name="brand-work-description" id="work-description" value="<?php echo $brand_work_description ?>" class="form-control" required>
                        </div>
                        <div class="button">
                            <input type="submit" name="update" value="Update Information"
                                class="form-wrapper-btn mt-8">
                        </div>
                    </fieldset>
                </form>

                <?php 

                    if(isset($_POST['update'])){

                        $brand_logo = $_POST['brand-logo'];
                        $brand_description = $_POST['brand-description'];
                        $brand_work_header = $_POST['brand-work-header'];
                        $brand_work_description = $_POST['brand-work-description'];

                        $permitted = array('jpg','jpeg','png','gif');
                        $brand_logo = $_FILES['brand-logo']['name'];
                        $brand_logo_temp = $_FILES['brand-logo']['tmp_name'];
                        $image_function = explode('.',$brand_logo);
                        $file_ext = strtolower(end($image_function));
                        $random_image_name  = substr(md5(time()),0,15).'.'.$file_ext;
                        $uploaded_image = "../uploads/".$random_image_name;
                        move_uploaded_file($brand_logo_temp,$uploaded_image);


                        /*If No Image File Is Selected */
                        if ((!($_FILES['brand-logo']['name']))){
                            $update_post_query ="UPDATE krackpottb_demo_1 SET brand_description = '{$brand_description}' 
                            ,brand_work_header = '{$brand_work_header}',brand_work_description = '{$brand_work_description}' WHERE id = '{$id}'";
                        }else{
                            $update_post_query ="UPDATE krackpottb_demo_1 SET brand_logo = '{$uploaded_image}', brand_description = '{$brand_description}' 
                            ,brand_work_header = '{$brand_work_header}',brand_work_description = '{$brand_work_description}' WHERE id = '{$id}'";
                        }

                        $update_post_query_result = mysqli_query($connect,$update_post_query);

                        if(!$update_post_query_result){
                            die('Query Failed'.mysqli_error($connection));
                        }else{
                            echo '<div class="alert alert-success pt-2" role="alert">
                                    Portfolio Information Updated Succesfully!
                                </div>';
                        }
                    }
                ?>    
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="../assets/script/core.js"></script>
    <script src="../assets/script/template.js"></script>
    <script src="../assets/script/config.js"></script>
    <script src="https://kit.fontawesome.com/7fdc918442.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('description-editor',{
            enterMode: CKEDITOR.ENTER_BR,
	        allowedContent: true,
        });
    </script>
</body>

</html>