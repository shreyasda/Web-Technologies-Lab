<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
<?php
        $name = $_POST['name'];
        $usn = $_POST['usn'];
        
        echo "<h1>Successfully registered!</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>USN: $usn</p>";
    ?>   
</body>
</html>
