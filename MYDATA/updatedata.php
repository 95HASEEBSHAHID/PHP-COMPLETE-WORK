<?php
include "header.php";
require "connection.php";

if ($_GET['id']) {
    // echo "id found";
    $id=$_GET['id']; 

    $getdata = "SELECT * FROM `student` WHERE id='$id';";
    $result = mysqli_query($connection, $getdata) or die("fail to run query");

    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);

        $name = $row['name'];
        $contact = $row['contact'];
        $city = $row['city'];
        $qualification = $row['qualification'];
?>

<div class="container my-4">
    <h1 class="text-center">Enter Student Details</h1>
    <form action="updatedata.php" method="post" class="form-group">
        <input type="hidden" name="id" class="form-control my-2" value="<?php echo $id ?>">
        <input type="text" name="name" class="form-control my-2" placeholder="Enter student name" value="<?php echo $name ?>">
        <input type="number" name="contact" class="form-control my-2" placeholder="Enter student contact no" value="<?php echo $contact ?>">
        <input type="text" name="city" class="form-control my-2" placeholder="Enter student city" value="<?php echo $city ?>">
        <input type="text" name="qualification" class="form-control my-2" placeholder="Enter student qualification" value="<?php echo $qualification ?>">
        <input type="submit" name="Add" class="form-control btn btn-primary my-2">
    </form>
</div>

<?php
    } else {
        echo "id not found";
    }
} else {
    echo "id not found";
}
?>
