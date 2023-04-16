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

$sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES('John', 'Doe', 'john@example.com')";

if (mysqli_query($con, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
