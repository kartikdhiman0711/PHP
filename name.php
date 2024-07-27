<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method = "GET" action = "">
            <!-- Username: <input type = "text" id = "usrname" name = "usrname"><br><br> -->
            First Name: <input type = "text" id = "fname" name = "name[]"><br><br>
            Middle Name: <input type = "text" id = "mname" name = "name[]"><br><br>
            Last Name: <input type = "text" id = "lname" name = "name[]"><br><br>
            <input type = "submit">
    </form>
    <?php
    print_r ($_GET);
    ?>
</body>
</html>