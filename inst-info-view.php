<?php
require_once'instituteView.php';
require'connection.php';

$instView = new instituteView();
$institute_info = $instView->viewInstituteInfo();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Institute Crud</title>
    <style>
        h1{
            color:red;
        }
    </style>
</head>

<body>
    
<div class="container  ">
    <h1>View all department info here:</h1>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
        <table class="table">
  <thead>
    <tr>
     
      <th scope="col">Sl no</th>
      <th scope="col">id</th>
      <th scope="col">Department name</th>
      <th scope="col">Establish date</th>
      <th scope="col">Batch no</th>
      <th scope="col">Chairman name</th>
      
    </tr>
  </thead>
  <tbody>

  <?php
  $i=1;
  ?>

  <?php while($data=mysqli_fetch_assoc($institute_info)){?>
    <tr>
      <td><?php echo $i++;?></td>
      <td><?php echo $data['id']?></td>
      <td><?php echo $data['department-name']?></td>
      <td><?php echo $data['department-establish-date']?></td>
      <td><?php echo $data['department-batch']?></td>
      <td><?php echo $data['department-chairmen']?></td>
      
    </tr>
    <?php } ?>

    

   

  </tbody>
</table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>