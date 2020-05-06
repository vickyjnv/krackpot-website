<?php

  include("db.php");
  $id = $_GET["id"];
  $result = mysqli_query($connect, "DELETE FROM attachments WHERE attachment_id=$id");
  $result_main = mysqli_query($connect, "DELETE FROM krackpottb_demo_1 WHERE id = $id");
  header("location:view-portfolio.php");

  /*Unlinking Logo File From Local Files */
  $sql_unlink = "DELETE brand_logo FROM krackpottb_demo_1 WHERE id = $id";
  $sql_unlink_result = mysqli_query($connect,$sql_unlink);
  while($row = mysqli_fetch_array($sql_unlink_result)){
    unlink("../uploads/" . $row['brand_logo']);
  }
?>