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
    $dbName = "ajax_demo";

    $con = mysqli_connect($serverName, $username, $password, $dbName);

    if (mysqli_connect_errno()) {
        echo "Error connecting to server: ";
        exit();
    }
    mysqli_select_db($con, "ajax_demo");
    $sql = "SELECT * FROM user WHERE id = '" . $q . "'";
    $result = mysqli_query($con, $sql);
    echo "<table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Hometown</th>
    <th>Job</th>
    </tr>";
    echo "</table>";
    ?>
</body>

</html>