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
