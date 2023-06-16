<!DOCTYPE html>
<html>
<head>
    <title>Last Visited Time</title>
</head>
<body>
    <?php
    // Check if the last visited time cookie is set
    if(isset($_COOKIE['last_visited'])){
        $lastVisited = $_COOKIE['last_visited'];
        echo "<h1>Last Visited Time</h1>";
        echo "<p>Last visited on: $lastVisited</p>";
    }
    
    // Set the current date and time as the last visited time
    $currentDateTime = date("Y-m-d H:i:s");
    setcookie("last_visited", $currentDateTime, time() + 86400); // Cookie expires in 24 hours
    ?>
</body>
</html>
