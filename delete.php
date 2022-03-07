<?php
  include 'connect.php';
   echo $id=$_GET['id'];
   mysqli_query($conn,"DELETE FROM `kumar` WHERE id=$id");
   header("location:display.php");

?>