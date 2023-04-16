<!DOCTYPE html>
<html>

<body>
    <base href="/php-forms/">
    <form action="forms.php" method="post">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    Welcome <?php echo $_POST["name"];?><br>
    Your email address is: <?php echo $_POST["email"];?>
</body>

</html>