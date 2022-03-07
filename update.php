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
  <body>
      <?php 
          include 'connect.php';
          $id=$_GET['id'];
          $record=mysqli_query($conn,"SELECT * FROM `kumar` WHERE id=$id");
          $data=mysqli_fetch_array($record);
          if(isset($_POST['update'])){

            $name=$_POST['name'];
            $price=$_POST['price'];
            $image=$_FILES['image'];
            $filename=$_FILES['image']['name'];
            $tempname=$_FILES['image']['tmp_name'];
            $folder="upload/".$filename;
            move_uploaded_file($tempname,$folder);
    
           
            $sql="UPDATE `kumar` SET `id`='$id',`name`='$name',`price`='$price',`image`='$folder' WHERE id='$id'";
            $result=mysqli_query($conn,$sql);
            if($result){
              //echo "Data is Updated Successfully";
              header("location:display.php");
            }else{
              echo "Data is Not Updated";
            }
          
        }

      ?>
<center class="center">
       <form action=""  method="POST" enctype="multipart/form-data">
           <label for="">Name</label>
           <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
           <label for="">Price</label>
             <input type="text" name="price" value="<?php echo $data['price'];  ?>"><br>
           <label for="">Image</label>
          <td></td><input type="file" name="image" value="<?php echo $data['image'] ?>"><br><img src="<?php echo $data['image'] ?>" width="200" height="100"></td><br>
           <input type="submit" name="update" value="Update">
       </form>
      </center>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>