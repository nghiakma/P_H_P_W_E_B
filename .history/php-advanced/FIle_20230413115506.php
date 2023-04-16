<!DOCTYPE html>
<html>

<body>
    <?php
    //Tao file; fopen() voi ki tu w
    $myfile = fopen("newfile.txt", "w") or die("Failed to open");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe1\n";
    fwrite($myfile, $txt);
    ?>
</body>

</html>