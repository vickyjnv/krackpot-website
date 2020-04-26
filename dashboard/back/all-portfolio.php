<?php include('includes/connectionClass.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/icons.css">
</head>
<body>

    <?php 
    $display_query ="SELECT * FROM krackpottb_demo_1 ORDER BY id DESC";
    $display_query_result = mysqli_query($connect,$display_query);

    while($row = mysqli_fetch_assoc($display_query_result)){
        $id = $row['id'];
        $brand_logo = $row['brand_logo'];
        $brand_description = $row['brand_description'];
        $brand_work_header = $row['brand_work_header'];
        $brand_work_description = $row['brand_work_description'];
        
	?>
    
    <div class="card m-3">
        <h1><?php echo $id ?></h1>
        <img src="uploads/<?php echo $brand_logo ?>" height="100" width="100">
        <p><?php echo $brand_description ?></p>

        <h3><?php echo $brand_work_header ?></h3>
        <h5><?php echo $brand_work_description ?></h5>
    </div>
    
    <div class="img-card card p-2">
    <?php
    
        $i="";
        /* $query="SELECT * FROM krackpottb_demo_1 a, krackpotbrandimages_demo_1 b WHERE a.id=b.id AND b.id = $id"; */
        $query="SELECT images,video FROM attachments";
        $fire=mysqli_query($connect,$query);
        $data=mysqli_fetch_assoc($fire);
        $res=$data['images'];
        $res=explode(" ",$res);
        $count=count($res)-1;
        for($i=0;$i<$count;++$i){
    ?>
        <img src="uploads/<?= $res[$i]?>" height="400px" width="400px"/>
        
    <?php } } ?>

    </div>
       

</body>
</html>