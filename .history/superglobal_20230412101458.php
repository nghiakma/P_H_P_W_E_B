<!--Superglobal: GLOBALS, SERVER, REQUEST, POST, GET, FILES, ENV, COOKIE, SESSION>
<?php 
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?>