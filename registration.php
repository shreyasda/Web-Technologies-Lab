<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
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
