<?php include("../includes/connectionClass.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Portfolio - Videos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                            <h4 class="dashboard-header">Update Uploaded Videos</h4>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
           <div id="portfolio-section">
                <?php
                    //Getting Id
                    if(isset($_GET['edit'])){
                        $id = $_GET["edit"];
                    }
                ?>
                <form action="#" method="POST" id="portfolio-form" name="form"
                    enctype="multipart/form-data" class="form-wrapper pt-4">
                        <?php
                        $query="SELECT * FROM krackpot_tb a, attachments b WHERE a.id=b.attachment_id AND a.id = $id";
                        $fire=mysqli_query($connect,$query);
                        $rows_count = mysqli_num_rows($fire);
                        if($rows_count<=0){
                            echo "<h1 class='prev-text '>No Videos Uploaded</h1>";
                        }else{
                            while($resultsn=mysqli_fetch_assoc($fire)){   
                            $video = $resultsn['video'];
                            $video_2 = $resultsn['video_2'];
                            $video_3 = $resultsn['video_3'];
                            
                            ?>
                            <h1 class='prev-text'>Previously Uploaded Video(s)</h1>
                            <div class="uploaded-iframe"><?php echo $video; ?></div>
                            <div class="uploaded-iframe"><?php echo $video_2; ?></div>
                            <div class="uploaded-iframe"><?php echo $video_3; ?></div>
                        <?php }} ?>
                        <div class="form-group">
                            <label for="yt-link"> Upload New Youtube Video Link</label>
                            <input type="text" name="brand-yt-link" id="yt-link" value='<?php echo $video  ?>' class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="yt-link"> Upload New Youtube Video Link</label>
                            <input type="text" name="brand-yt-link_2" id="yt-link_2" value='<?php echo $video_2  ?>'  class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="yt-link"> Upload New Youtube Video Link</label>
                            <input type="text" name="brand-yt-link_3" id="yt-link_3" value='<?php echo $video_3  ?>'  class="form-control">
                        </div>
                        <div class="button">
                            <input type="submit" name="upload-portfolio" value="Update Videos" class="form-wrapper-btn mt-8">
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
                                $brand_youtube_video_link = $_POST['brand-yt-link'];
                                $brand_youtube_video_link_2 = $_POST['brand-yt-link_2'];
                                $brand_youtube_video_link_3 = $_POST['brand-yt-link_3'];

                                $add_query_attachments_table = "UPDATE attachments SET  video = '{$brand_youtube_video_link}'
                                    , video_2 = '{$brand_youtube_video_link_2}', video_3 = '{$brand_youtube_video_link_3}' WHERE attachment_id = '{$id}'";
                                $add_query_attachments_table_result = mysqli_query($connect,$add_query_attachments_table);
                                if(!$add_query_attachments_table_result){
                                    die(mysqli_error($connect));
                                }else{
                                    echo '<div class="alert alert-success mt-3 h2" role="alert">
                                                Videos Updated Succesfully
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