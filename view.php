<?php
require'institute.php';
require'connection.php';
$sms ="";
if(isset($_POST['btn'])){
    $institute = new institute();
    $sms = $institute->departmentInfo($_POST);
}
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
        h2{
            color:red;
        }
    </style>
</head>

<body>
    
<div class="container  ">
<h2><?php echo $sms;?></h2>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
        <form action ="" method = "POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Department Name:</label>
                <input type="text" name="department-name" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Department Establish date:</label>
                <input type="date" name="department-establish-date" class="form-control" placeholder="Date">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Department Batch:</label>
                <input type="text" name="department-batch" class="form-control" placeholder="Batch">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Department Chairmen:</label>
                <input type="text" name="department-chairmen" class="form-control" placeholder="Chairmen Name">
            </div>
    
            <button type="submit" name="btn" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>