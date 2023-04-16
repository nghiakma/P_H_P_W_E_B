<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "myDB";

$con = mysqli_connect($serverName, $username, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Error connecting to server: ";
    exit();
} else {
    echo "Connection success";
}
//su dung unsiged cho so nguyen khong am
$sql = "CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    
)";
