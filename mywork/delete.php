<?php
require("connection.php");

if ($_GET['id']) {
    $id = $_GET['id'];

    $delete = "DELETE FROM `details` WHERE id = '$id';";

    $result = mysqli_query($connection, $delete) or die("Failed to delete query.");

    if ($result) {
        echo "<script>alert('Form row deleted successfully.')</script>";
        header("location: index.php");
    } else {
        echo "<script>alert('Sorry, failed to delete it')</script>";
    }
}


function printGenderRadioButton($gender) {
    echo "<input type='radio' name='gender' value='$gender'>$gender";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
</head>
<body>

<form action="#" method="GET">
    <p>Select gender:</p>
    <?php
    
    printGenderRadioButton('Male');
    printGenderRadioButton('Female');
    printGenderRadioButton('Other');
    ?>
    <br><br>
    <button type="submit">Delete Record</button>
</form>

</body>
</html>
