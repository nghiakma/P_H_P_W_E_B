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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    //tim nap hang tiep theo cua tap ket qua duoi dang mang ket hop
    while ($row = mysqli_fetch_assoc($result)) {
    }
}
mysqli_close($con);
