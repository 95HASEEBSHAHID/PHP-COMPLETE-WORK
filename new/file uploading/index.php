<?php
include "../include/header.php";
require "../include/connection.php";

// Assuming you have already established a database connection

// Fetch images from the database
$query = "SELECT * FROM `mobile`";
$result = mysqli_query($connection, $query) or die("Query Failed");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Gallery</title>
    <!-- Add your CSS stylesheets here -->
    <style>
        .card {
            width: 200px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center display-3 fw-semibold">PRODUCT GALLERY</h1>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            <p class="card-text">Price: <?php echo $row['price']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>

</html>
