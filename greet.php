<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Greeting </title>
</head>
<body>
    <?php
        $greetings = ['Hi', 'Hello', 'Hola', 'Bonjour'];
        $index = rand(0,4);
        $greet = $greetings[$index];
        if(isset($_GET['name'])){
            $name = $_GET['name'];
        }
        echo "<h1>$greet $name</h1>";

    ?>
</body>
</html>
 