<?php
    include 'connect.php';
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
      background-color: lightgoldenrodyellow;
      
    }
    h4{
      background-color: lightgreen;
    }
    table{
      background-color: lightgreen;
    }
  </style>
  <body ><br><br>
      <div class="row" style="text-align: center;">
       <div class="col-md-12">
         <div class="card">
           <h4 style="text-align: center;">How to fetch Date</h4>
         </div>
         <div class="card-body">
           <div class="row">
             <div class="col-md-6">
               <form action="" method="POST">
                 <a href="index.php" class="btn btn-primary" style="margin-right: 500px;">Home</a>
                  <input type="text" name="id">
                <button type="submit" name="submit" class="btn btn-primary">Search</button>
                </form>
             </div>
           </div><br><br>
              <?php
                   if(isset($_POST['submit'])){
                       $id=$_POST['id'];
                       $query="SELECT * FROM `kumar` where id='$id'";
                       $query_run=mysqli_query($conn,$query);

                       if(mysqli_num_rows($query_run)>0){
                         while($row=mysqli_fetch_array($query_run)){
                           echo "<table border='1' align=center>
                           <thead>
                             <tr>
                               <th>Sr No</th>
                               <th width='400px'align=center>Name</th>
                               <th width='400px'>Price</th>
                               <th width='400px'>Image</th>
                               </div>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                             <th>$row[id]</th>
                             <td width='400px'>$row[name]</td>
                             <td width='400px'>$row[price]</td>
                             <td width='400px'><img src='$row[image]' width='300' height='200'></td>
                             </tr>
                           </tbody>
                         </table>";
                         }

                       }else{
                         echo "no Data available";
                       }

                   }

              ?>

            
         </div>
       </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>