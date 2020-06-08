<?php include("../includes/connectionClass.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View Portfolios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/datatable.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-32x32.png">
</head>

<body class="header-fixed">
    <?php include('../includes/header.php'); ?>
    <!-- partial -->
    <div class="page-body">
        <?php include('../includes/sidebar.php'); ?>
        <!-- partial -->
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h4 class="dashboard-header">View All Portfolios</h4>
                           
                        </div>
                    </div>
                </div>
            </div>
            <table id="portfolio_table" class="table table-bordered table-hover w-100" >
               <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>Brand Logo</th>
                        <th>Brand Description</th>
                        <th>Brand Work </th>
                        <th>Brand Work Description</th>
                        <th>Brand Uploaded Images</th>
                        <th>Brand Uploaded Videos</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query ="SELECT * FROM krackpot_tb ORDER BY id DESC";
                        $sql = mysqli_query($connect,$query);
                        while($row = mysqli_fetch_array($sql)){
        	        ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><img src='<?php echo $row["brand_logo"];?>' class="uploaded-image"></td>
                    <td><?php echo strip_tags($row["brand_description"]);?></td>
                    <td><?php echo $row["brand_work_header"];?></td>
                    <td ><?php echo $row["brand_work_description"];?></td>
                    
                    <?php 
                        $i="";
                        $query="SELECT * FROM krackpot_tb a, attachments b WHERE a.id=b.attachment_id AND a.id = ".$row['id'];
                        $fire=mysqli_query($connect,$query);
                        while($resultsn=mysqli_fetch_assoc($fire)){
                            $i='';
                            $fetch_img =  $resultsn['images'];
                            $tempr = explode(' ',$fetch_img);
                            $count=count($tempr)-1;
                            $imgs = '';
                            for($i=0;$i<$count;++$i){
                                $imgs .= "<img src='uploads/".$tempr[$i]."' class='img-thumbnail'>";
                            }
                    ?>
                    <td><?php echo $imgs; ?></td>
                    <td><?php   
                            $video = $resultsn['video'];
                            $video_2 = $resultsn['video_2'];
                            $video_3 = $resultsn['video_3']; 
                            echo $video;
                            echo $video_2;
                            echo $video_3; 
                            }
                        ?>
                    </td>
                    <td><a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn-block btn-common">Edit Information</a>
                    <hr>
                    <a href="add-images.php?add=<?php echo $row['id']; ?>" class="btn-block btn-common ">Add / Replace Images</a>
                    <a href="delete-images.php?delete=<?php echo $row['id']; ?>" class="btn-block btn-delete btn-common ">Delete Uploaded Images</a>
                    <hr>
                    <a href="edit-videos.php?edit=<?php echo $row['id']; ?>" class="btn-block btn-common ">Edit Videos</a>
                    <hr>
                    <a href="delete.php?id=<?php echo $row['id'];?>" class="btn-common btn-delete btn-block" onClick="return confirm('Are you sure you want to delete?');">Delete All</a></td>
                </tr>
            <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="../assets/script/core.js"></script>
    <script src="../assets/script/template.js"></script>
    <script src="https://kit.fontawesome.com/7fdc918442.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>  
    <script type="text/javascript" language="javascript">
        $(document).ready(function() {
            $('#portfolio_table').DataTable();
        });
    </script>
</body>

</html>