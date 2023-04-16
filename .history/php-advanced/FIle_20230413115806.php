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
    fclose($myfile);
    ?>
    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    ?>


</body>

</html>