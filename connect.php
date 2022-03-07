<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sanjeev";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die(mysqli_error($conn));
    }
?>