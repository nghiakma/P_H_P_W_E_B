<!DOCTYPE html>
<html>

<head></head>

<body>
    <?php
    //chuyen doi gia tri thanh mot so nguyen
    $q = intval($_GET['q']);
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
    ?>
</body>

</html>