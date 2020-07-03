<?php include('../includes/connectionClass.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Client Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-32x32.png">
</head>

<body class="header-fixed">
   <?php include('../includes/header.php'); ?>
    <div class="page-body">
        <?php include('includes/sidebar.php'); ?>
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h4 class="dashboard-header">Update Client</h4>
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
                        $all_rows = "SELECT * FROM clients_tb WHERE id = $id";
                        $all_rows_result = mysqli_query($connect, $all_rows);

                        while($row = mysqli_fetch_assoc($all_rows_result)){
                            
                           $client_logo = $row['client_logo'];
                           $client_name = $row['client_name'];
                        }
                    }
                ?>

                <form action="#" method="POST" id="clients-form" name="form" enctype="multipart/form-data"
                    class="form-wrapper pt-4 mt-4">
                        <div class="form-group">
                            <h3 class="prev-text">Previously Uploaded Logo</h3>
                            <img src="<?php echo $client_logo;?>" class="uploaded-image" >
                            <label for="client-logo">Upload New Logo</label>
                            <div class="file-upload-wrapper" data-text="Select your file!">
                                <input name="client-logo" type="file" class="file-upload-field" id="client-logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client-name"> Client Name</label>
                            <input type="text" name="client-name" id="client-name" value="<?php echo $client_name; ?>" class="form-control" >
                        </div>
                        <div class="button">
                            <input type="submit" name="update-client" value="Upload Client Information"
                                class="form-wrapper-btn mt-8">
                        </div>
                </form>

                <?php 

                    if(isset($_POST['update-client'])){

                        $permitted = array('jpg','jpeg','png','gif');
                        $client_logo = $_FILES['client-logo']['name'];
                        $client_logo_temp = $_FILES['client-logo']['tmp_name'];
                        $client_name = $_POST['client-name'];
                        $date = date('d-m-y');

                        //Image Function
                        $image_function = explode('.',$client_logo);
                        $file_ext = strtolower(end($image_function));
                        $random_image_name  = substr(md5(time()),0,30).'.'.$file_ext;
                        $uploaded_image = "clients_uploads/".$random_image_name;
                        move_uploaded_file($client_logo_temp,$uploaded_image);

                        /*If No Image File Is Selected */
                        if ((!($_FILES['client-logo']['name']))){
                            $update_post_query ="UPDATE clients_tb SET client_name = '{$client_name}' WHERE id = '{$id}'";
                        }else{
                            $update_post_query ="UPDATE clients_tb SET client_logo = '{$uploaded_image}', client_name = '{$client_name}' 
                             WHERE id = '{$id}'";
                        }

                        $update_post_query_result = mysqli_query($connect,$update_post_query);

                        if(!$update_post_query_result){
                            die('Query Failed');
                        }else{
                            echo '<div class="alert alert-success h2 mt-3" role="alert">
                                    Client Information Updated Succesfully
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
    <script src="https://kit.fontawesome.com/7fdc918442.js" crossorigin="anonymous"></script>
</body>

</html>