<?php
    include "header.php";

    $server = "localhost";
    $username = "root";
    $dbpass = "";
    $dbname = "beaconhouseschoolsystem";

    $connection = mysqli_connect($server, $username, $dbpass, $dbname);

    if ($connection) {

        $read = "SELECT * FROM student";
        $result = mysqli_query($connection, $read);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {

                echo "<table class='table'>
                        <thead>
                            <tr>
                                <th scope='col'>ID</th>
                                <th scope='col'>Student Name</th>
                                <th scope='col'>Contact</th>
                                <th scope='col'>City</th>
                                <th scope='col'>Actions</th>
                            </tr>
                        </thead>
                        <tbody>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td scope='row'>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>" . $row['city'] . "</td>";
                    echo '<td>
                            <a href="update.php?id=' . $row["id"] . '" class="btn btn-success px-2 mx-2">Edit</a>
                            <a href="delete.php?id=' . $row["id"] . '" class="btn btn-danger">Delete</a>
                          </td>';
                          echo "</tr>";
            }
            ?> 
            </tbody>
        </table>
        <?php
    }
    else{
        echo "<script>alert('record noy found')</script>";
    }
}else{
    echo "<script>alert('failed to executen query')</script>";
}

}else{
    die("failed to connect");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>