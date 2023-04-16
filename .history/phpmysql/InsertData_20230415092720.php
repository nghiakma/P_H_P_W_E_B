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

//$sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES('John', 'Doe', 'john@example.com')";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($con);
