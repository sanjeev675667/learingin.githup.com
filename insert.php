<?php
    
    include 'connect.php';
    
    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $price=$_POST['price'];
        $image=$_FILES['image'];
        $filename=$_FILES['image']['name'];
        $tempname=$_FILES['image']['tmp_name'];
        $folder="upload/".$filename;
        move_uploaded_file($tempname,$folder);

        $sql="INSERT INTO `kumar` (`id`, `name`, `price`, `image`) VALUES (NULL, '$name', '$price', '$folder')";
        $result=mysqli_query($conn,$sql);
        if($result){
            //echo "Data is inserted";
            header("location:display.php");
        }else{
            echo "Date is not insered";
        }

    }
?>