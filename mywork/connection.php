<?php
    $server = "localhost";
    $username = "root";
    $db_pass = "";
    $dbname = "employees";

    $connection = mysqli_connect($server, $username, $db_pass, $dbname);

    if (!$connection){
        die("Failed to connect");
    }else{
        echo "database connected";
    }

?>
