<?php include('../includes/connectionClass.php');

    session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role'])){
		  header('location:../../../dist/login/login.php');
		exit;
	}		


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Clients</title>
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
                            <h4 class="dashboard-header">Add New Client </h4>
                            
                        </div>
                    </div>
            <div id="portfolio-section" class="mt-4">
                <form action="#" method="POST" id="clients-form" name="form" enctype="multipart/form-data" class="pt-4 form-wrapper">
                        <div class="form-group">
                            <label for="client-logo">Upload Logo</label>
                            <div class="file-upload-wrapper" data-text="Select your file!">
                                <input name="client-logo" type="file" class="file-upload-field" id="client-logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client-name"> Client Name</label>
                            <input type="text" name="client-name" id="client-name" class="form-control" >
                        </div>
                        <div class="button">
                            <input type="submit" name="submit-client" value="Upload Client Information"
                                class="form-wrapper-btn mt-8">
                        </div>

                    <?php

                        if(isset($_POST['submit-client'])){
                        $permitted = array('jpg','jpeg','png','gif');
                        $client_logo = $_FILES['client-logo']['name'];
                        $client_logo_temp = $_FILES['client-logo']['tmp_name'];
                        $client_name = $_POST['client-name'];
                        $date = date('d-m-y');

                        //Image Function
                        $image_function = explode('.',$client_logo);
                        $file_ext = strtolower(end($image_function));
                        $random_image_name  = substr(md5(time()),0,20).'.'.$file_ext;
                        $uploaded_image = "clients_uploads/".$random_image_name;
                        move_uploaded_file($client_logo_temp,$uploaded_image);

                        //Insert Query (For Details Table)
                        $add_query = "INSERT INTO clients_tb (client_name,client_logo,created_at) VALUES ('{$client_name}','{$uploaded_image}',now())";

                        $add_query_result = mysqli_query($connect,$add_query);

                        if(!$add_query_result){
                            die("Something Went Wrong".mysqli_error($connect));
                        }else{
                             echo '<div class="alert alert-success mt-3 h2" role="alert">
                                                Clients Uploaded Succesfully
                                          </div>';
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