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
            <option value="2">Lois Griffin</option>
            <option value="3">Joseph Swanson</option>
            <option value="4">Glenn Quagmire</option>
        </select>
    </form>
    <br>
    <div id="txtHint"><b>Person info will be listed here...</b></div>
</body>

</html>