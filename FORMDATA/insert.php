
<?php
// include ("connection.php");
require("connection.php");

if(isset($_POST['Add'])){

    $emp_name = $_POST['emp_name'];
    $emp_age = $_POST['emp_age'];
    $emp_city = $_POST['emp_city'];
    $emp_qualification	= $_POST['emp_qualification'];

    $insert = "INSERT INTO `employees`(`emp_name`, `emp_age`, `emp_city` , `emp_qualification`) VALUES ('$emp_name', '$emp_age', '$emp_city' , '$emp_qualification')";
    $result = mysqli_query($connection, $insert) or die("failed to insert query.");

    if($result) {
        echo "<script>alert('Student's Details added.')</script>";
    }
    else{
        echo "<script>alert('Sorry, Failed to insert this record. ')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
    
<body>
<div class="container my-4">
    <h1 class="text-center">Enter Employee Details</h1>
    <form action="" method="post" class="form-group">
        
        <input type="text" name="emp_name" id="" class="form-control my-2" placeholder="Enter employee name">
        <input type="number" name="emp_age" id="" class="form-control my-2" placeholder="Enter employee age">
        <input type="text" name="emp_city" id="" class="form-control my-2" placeholder="Enter employee city">
        <input type="text" name="emp_qualification" id="" class="form-control my-2" placeholder="Enter employee qualification">
        <input type="submit" name="Add" id="" class="form-control btn btn-primary my-2">
    </form>
</div>

</body>
</html>