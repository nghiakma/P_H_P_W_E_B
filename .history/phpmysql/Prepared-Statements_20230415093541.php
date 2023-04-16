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
if (mysqli_multi_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($con);
