<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "myDB";

$con = new mysqli($serverName, $username, $password, $dbName);

if ($con->connect_error) {
    echo "Error connecting to server: ";
    exit();
} else {
    echo "Connection success";
}

//tinh nang dc su dung de ethuc thi lap di lap lai cac cau lenh sql giong nhau
$stmt = $con->prepare("INSERT INTO MyGuests(firstname,lastname,email) VALUES(?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);
$firstname = "nghia";
$lastname = "tran";
$email = "nghia@gmail.com";
$stmt->execute();

$stmt->close();
$conn->close();
