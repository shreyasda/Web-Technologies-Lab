<!DOCTYPE html>
<html>
<head>
    <title>Welcome Message</title>
</head>
<body>
    <?php
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
        
        echo "<h1>Welcome, $first_name $last_name!</h1>";
    ?>
</body>
</html>
