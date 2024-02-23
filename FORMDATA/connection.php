<?php

$server = "localhost";
$username = "root";
$db_pass = "";
$dbname = "office";

$connection = mysqli_connect($server, $username, $db_pass, $dbname);

if(!$connection){
     die("failed to connect the database");
}else{
    echo "database is connected";
}

?>
