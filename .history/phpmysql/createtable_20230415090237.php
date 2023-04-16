<?php
$serverName = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($serverName, $username, $password);

if (mysqli_connect_errno()) {
    echo "Error connecting to server: ";
    exit();
} else {
    echo "Connection success";
}

$sql = "CREATE TABLE myDB";
if (mysqli_query($con, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database" . mysqli_error($con);
}
