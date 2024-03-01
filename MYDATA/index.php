<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xr4zvue/A8NIdNX4Vz2sHpYz/3QyuQIr5axmdVeLFETeFOKgpzD9KRQbyfSN18K2" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h2>STUDENT RECORDS</h2>
    <?php 
    include "header.php";
    $server="localhost";
    $username="root";
    $dbpass="";
    $dbname="beaconhouse";

    $connection=mysqli_connect($server,$username,$dbpass,$dbname);
    if($connection){
        $read="SELECT * FROM `student`;";
        $result=mysqli_query($connection,$read);
        if($result){
            if(mysqli_num_rows($result) > 0){
    ?>
    <div class="row">
        <?php   
        while($row=mysqli_fetch_assoc($result)){
        ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                    <p class="card-text">ID: <?php echo $row['id']; ?></p>
                    <p class="card-text">Contact: <?php echo $row['contact']; ?></p>
                    <p class="card-text">City: <?php echo $row['city']; ?></p>
                    <p class="card-text">Qualification: <?php echo $row['qualification']; ?></p>
                    <a href="update.php?id=<?php echo $row["id"]; ?>" class="btn btn-success px-2 mx-2">Edit</a>
                    <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <?php
            } else {
                echo "<p>No records found</p>";
            }
        } else {
            echo "<p>Failed to execute query</p>";
        }
        mysqli_close($connection);
    } else {
        die("Failed to connect to database");
    }
    ?>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-XtEVsAHttnODv5srFtkuG2n0tD0gNLX8L/Ats5UKuw4ztFBNYapuUarLyGvKBE+g" crossorigin="anonymous"></script>
</body>
</html>
