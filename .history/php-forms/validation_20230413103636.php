<!DOCTYPE html>
<html>

<body>
    <h2>PHP Form Validation Example</h2>
    <form action="validation.php" method="post">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Other">Other
        <br><br>
        <input type="submit">
    </form>
    <?php
     $name = $email = $website = $comment = $gender = "";
     if($_SERVER["REQUEST_METHOD"] == "POST"){
       $name = test_input($_POST["name"]);
     }
     function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
    ?>
</body>

</html>