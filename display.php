<?php
 error_reporting(0);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    body{
      background-color:lightgoldenrodyellow;
    }
    h1{
      color: blue;
      text-align: center;
      border-bottom: 10px;
      background-color: lightgreen;
    }
    .table{
       border: 2px;
       margin-top: 10px;
       background-color: lightgrey;
      
    }
  </style>

  <body><br><br>
  <h1 >Student All Details</h1>
  <input type="text" name="search" placeholder="Search Bar" id="myInput" onkeyup="SearchFun()">
      <table class="table">
       <thead>
    <tr>
      <th scope="col">Sr No</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">New User</th>
      <th scope="colo">Update</th>
      <th scope="col">Delete</th>
    </tr>
     </thead>
    <tbody>
          <?php 
                include 'connect.php';

                $pic=mysqli_query($conn,"SELECT * FROM `kumar`");
                while($row=mysqli_fetch_array($pic)){
                  echo "<tr>
                  <td>$row[id]</td>
                  <td>$row[name]</td>
                  <td>$row[price]</td>
                  <td><img src='$row[image]' width='100' height='100'></td>
                  <td><a href='index.php? id=$row[id] 'class='btn btn-primary'>New User</a></td>
                  <td><a href='update.php? id=$row[id] 'class='btn btn-primary'>Update</a></td>
                  <td><a href='delete.php? id=$row[id] 'class='btn btn-danger'>Delete</a></td>
                  <td><a href='login.php' class='btn btn-primary' >Login</a></td>
                  </tr>";
                }
           ?>

  
  </tbody>
</table>
<script>
  const SearchFun=()=>{
    let filter =document.getElementById('myInput').value.toUpperCase();
    let mytable=document.getElementById('myInput');
    let tr=mytable.getElementsByTagName
  }
</script>
  </body>
</html>