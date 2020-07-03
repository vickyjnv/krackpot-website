<?php include('../dashboard/includes/connectionClass.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard/assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dashboard/assets/images/favicon-32x32.png">
</head>

<body>
    <div class="section clients-section">
        <nav class="navbar navbar-clients-gray fixed-top">
            <?php include('includes/sidebar.php'); ?>
        </nav>
                    <div class="animate__animated animate__fadeInLeft">
                        <div class="section-info">
                            <div class="section-info-viewport section-info-clients ">
                                <div class="animated fadeInRight">
                                    <div class="clients-row">
                                    <?php 
                                        $display_query = "SELECT * FROM clients_tb";
                                        $display_query_result = mysqli_query($connect,$display_query);

                                        while($row = mysqli_fetch_array($display_query_result)){
                                            $client_logo = $row['client_logo'];
                                            $client_name = $row['client_name'];
                                            ?>
                                            <div class="clients-row-inner-columns">
                                                <img src="../dashboard/clients/<?php echo $client_logo; ?>" alt="" class="clients-img">
                                            </div>
                                        <?php } ?>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</body>

</html>