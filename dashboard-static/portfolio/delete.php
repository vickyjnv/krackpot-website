<?php

  include("db.php");
  $id = $_GET["id"];
  $result = mysqli_query($connect, "DELETE FROM attachments WHERE attachment_id=$id");
  $result_main = mysqli_query($connect, "DELETE FROM krackpottb_demo_1 WHERE id = $id");
  header("location:view-portfolio.php");

?>