<!--Superglobal: GLOBALS, SERVER, REQUEST, POST, GET, FILES, ENV, COOKIE, SESSION-->
<!doctype html>
<html>

<body>
    <?php 
$x = 75;
$y = 25;
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;

//$_SERVER: holds information, about headers, path, and script locations
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

//$_REQUEST: which is used to collect data after submitting a HTML form
//$_POST: which is used to collect data form data after submitting a HTML form with method POST
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php 
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = htmlspecialchars($_REQUEST['fname']);
        if(empty($name)){
            echo "Name is empty";
        }else{
            echo $name;
        }
      }
//$_GET: which is used to collect form data after submitting a html form with the method get
    ?>
    <a href="test_get.php" ?subject=PHP&web=W3schools.com>Test $GET</a>
</body>

</html>