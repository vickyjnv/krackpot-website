<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="images[]" multiple>
    <input type="submit" value="Submit" name="submit">
    </form>

    <?php 

        $con=mysqli_connect('localhost','root','','krackpot');
        if($con){
            
            }else{
            echo "Failed";
        }

        if(isset($_POST['submit'])){	
            $file='';
            $file_tmp='';
            $location="uploads/";
            $data='';
            foreach($_FILES['images']['name'] as $key=>$val){
            $file=$_FILES['images']['name'][$key];
            $file_tmp=$_FILES['images']['tmp_name'][$key];
            move_uploaded_file($file_tmp,$location.$file);
            $data .=$file." ";
            }
            $query="insert into test (images) values('$data')";
            $fire=mysqli_query($con,$query);
            if($fire)
            {
                echo "Successful";
            }else
            {
                echo "Failed".mysqli_error($con);
            }
        }

        $i="";
        $query="select images from test ORDER BY id DESC";
        $fire=mysqli_query($con,$query);
        $data=mysqli_fetch_array($fire);
        $res=$data['images'];
        $res=explode(" ",$res);
        $count=count($res)-1;
        for($i=0;$i<$count;++$i){
	?>
	<img src="uploads/<?= $res[$i]?>" height="400px" width="400px"/>
	<?php }
    ?>
</body>
</html>