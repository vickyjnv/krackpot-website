<?php

  include("../includes/connectionClass.php");
  $id = $_GET["delete"];
  $result = mysqli_query($connect, "UPDATE attachments SET images = Null WHERE attachment_id = '$id'");
  header('Location: view-portfolio.php');
?>