<?php

  include("../includes/connectionClass.php");
  $id = $_GET["id"];
  $result = mysqli_query($connect, "DELETE FROM attachments WHERE attachment_id=$id");
  $result_main = mysqli_query($connect, "DELETE FROM krackpot_tb WHERE id = $id");
  
  //Unlinking Images
  $row = mysqli_fetch_array($result_main);
  $image = $row['brand_logo'];
  unlink("uploads/".$image);
  header("location:view-portfolio.php");

?>