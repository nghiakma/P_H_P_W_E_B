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
//su dung unsigned cho so nguyen khong am
$sql = "CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($con, $query)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
