<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "crud_example";

// create connection
$connect = mysqli_connect($hostname, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}else {
    echo "Successfully Connected";
}

