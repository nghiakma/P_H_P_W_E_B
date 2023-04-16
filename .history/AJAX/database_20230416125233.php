<!DOCTYPE html>
<html>

<head>
    <!--border-collapse: collapse;xác định cách thức hiển thị của các đường viền (border) trong bảng (table) trên trang web. 
    các đường viền giữa các ô sẽ không được hiển thị, và các đường viền ngoài cùng của bảng sẽ được gộp lại thành một đường duy nhất.-->
    <style>
        table {
            width: 100%;

        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

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
    $sql = "SELECT * FROM inforuser WHERE id = '" . $q . "'";
    $result = mysqli_query($con, $sql);
    echo "<table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Hometown</th>
    <th>Job</th>
    </tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Hometown'] . "</td>";
        echo "<td>" . $row['Job'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>

</body>

</html>