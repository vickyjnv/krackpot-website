<?php include('includes/connectionClass.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/dropzone.css">
    <link rel="stylesheet" href="assets/css/basic.css">

    
</head>
<body>
    <?php include_once('includes/navbar.php'); ?>
    <?php include_once('includes/sidebar.php'); ?>
     <div class="main-panel">
        <div class="content-wrapper">
        <h1 class="greetings">Add New Portfolio</h1>
        <div class="page-card">
            <form action="add-portfolio_demo.php" method="POST" id="portfolio-form" name="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="brand-logo">Upload Logo</label>
                    <div class="file-upload-wrapper" data-text="Select your file!">
                        <input name="brand-logo" type="file" class="file-upload-field" id="brand-logo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="brand-logo">Brand Description</label>
                    <textarea name="brand-description" id="description-editor" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="work-header"> Work Details (i.e Design Or Developed)</label>
                        <input type="text" name="brand-work-header" id="work-header" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="work-description"> Work Description</label>
                        <input type="text" name="brand-work-description" id="work-description" class="form-control" required>
                </div>
                <!-- <div class="form-group">
                    <label for="multiple-image-upload"> Brands Images</label><br>
                    <button type="button" class="btn-upload" data-toggle="modal" data-target="#uploadImageModal">Upload Images Here</button>
                </div> -->

                <div class="form-group">
                    <label for="brand-logo">Upload Brand Images</label>
                     <div class="file-upload-wrapper" data-text="Drag & Drop Or Click To Upload Multiple Images">
                        <input name="brand-images[]" type="file" class="file-upload-field" id="brand-images" multiple required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="yt-link"> Youtube Video Link</label>
                        <input type="text" name="brand-yt-link" id="yt-link" class="form-control" required>
                </div>
                <div class="button-center">
                    <input type="submit" class="btn btn-gradient-primary mt-4 mb-4" name="submit-portfolio">
                </div>
            </form>


            <?php 

                if(isset($_POST['submit'])){
                    /* $id = $_POST['id']; */
                    $brand_logo = $_FILES['brand-logo']['name'];
                    $brand_logo_temp = $_FILES['brand-logo']['tmp_name'];
                    $brand_description = $_POST['brand-description'];
                    $brand_work_header = $_POST['brand-work-header'];
                    $brand_work_description = $_POST['brand-work-description'];
                    $date = date('d-m-y');

                    //Image Function
                    move_uploaded_file($brand_logo_temp,"uploads/$brand_logo");

                    //Insert Query (For Details Table)
                    $add_query = "INSERT INTO krackpottb_demo_1 (brand_logo,brand_description,brand_work_header,
                    brand_work_description,date_of_upload) VALUES ('{$brand_logo}','{$brand_description}',
                    '{$brand_work_header}','{$brand_work_description}',now())";

                    $add_query_result = mysqli_query($connect,$add_query);

                    //Multiple Upload
                        $file='';
                        $file_tmp='';
                        $location="uploads/";
                        $data='';
                        foreach($_FILES['brand-images']['name'] as $key=>$val){
                            $file=$_FILES['brand-images']['name'][$key];
                            $file_tmp=$_FILES['brand-images']['tmp_name'][$key];
                            move_uploaded_file($file_tmp,$location.$file);
                            $data .=$file." ";
                        }
                        $brand_youtube_video_link = $_POST['brand-yt-link'];
                        
                        //Securing Youtube Video So That It Will Accept All Html Elements
                        $secureVideo = htmlentities($brand_youtube_video_link);

                        $add_query_attachments_table = "INSERT INTO attachments (images,video,attachment_id) VALUES ('{$data}','{$brand_youtube_video_link}')";
                        $add_query_attachments_table_result = mysqli_query($connect,$add_query_attachments_table);

                        if(!$add_query_result && !$add_query_attachments_table_result){
                            die("Query Failed !".mysqli_error($connect));
                        }else{
                            echo '<div class="alert alert-success" role="alert">
                                        Element Added Successfully!
                                    </div>';
                        }
                    }
                ?>
        </div>
    </div>

    <!-- <div class="modal fade" id="uploadImageModal" tabindex="-1" role="dialog" aria-labelledby="uploadImageModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadImageModalTitle">Upload Images</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="imageDropzone" action="imageUpload.php" enctype="multipart/form-data" class="dropzone">
                        <div class="dz-message">
                            <div class="icon"><span class="fa fa-cloud fa-3x"></span></div>
                            <h3>Click Or Drag and Drop Images here!!!</h3>
                        </div>
                    </form>
                    <div class="button-center">
                    </div>
                    <div id="preview"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->
    <?php include_once('includes/footer.php'); ?>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="assets/script/dropzone.js"></script>
    <script>
        $("form").on("change", ".file-upload-field", function(){ 
        $(this).parent(".file-upload-wrapper").attr("data-text",$(this).val().replace(/.*(\/|\\)/, '') );
    });

     CKEDITOR.replace( 'description-editor' );
    </script>
        
    <!-- <script>
        Dropzone.autoDiscover = false;
        var dropzone1 = new Dropzone('#imageDropzone', {
          maxFiles:50,
          forceFallbacks:true,
          autoDiscover:false,
          createImageThumbnails:false,
          init:function(){
              this.on("success",function (file,response){
                  alert(response);
              });
            }
        });
    </script> -->
</body>
</html>