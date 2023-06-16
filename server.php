<!DOCTYPE html>
<html>
<head>
    <title>Server Information</title>
</head>
<body>
    <?php
    echo "<h1>Server Information</h1>";
    
    // Server Name
    echo "<p>Server Name: " . $_SERVER['SERVER_NAME'] . "</p>";
    
    // Server Software
    echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
    
    // Server Protocol
    echo "<p>Server Protocol: " . $_SERVER['SERVER_PROTOCOL'] . "</p>";
    
    // CGI Revision
    echo "<p>CGI Revision: " . $_SERVER['GATEWAY_INTERFACE'] . "</p>";
    ?>
</body>
</html>
