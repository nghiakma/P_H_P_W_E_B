<!DOCTYPE html>
<html>

<head>
    <script>
        function showUser(str) {

        }
    </script>
</head>

<body>
    <!--Khi nguoi dung thay doi gia tri ham onchange se dc kich hoat-->
    <form>
        <select name="users" onchange="showUser(this.value)">
            <option value="">Select a person:</option>
            <option value="1">Peter Griffin</option>
        </select>
    </form>
</body>

</html>