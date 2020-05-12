<?php

  include("../includes/connectionClass.php");
  $id = $_GET["id"];
  $result = mysqli_query($connect, "DELETE FROM clients_tb WHERE id=$id");
  header("location:view-all-clients.php");

?>