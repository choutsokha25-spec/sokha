<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowInfo</title>
</head>
<body>
     <?php 
    function ShowInfo($name, $age){
        echo "<h1>My name is $name</h1>";
        echo "<p>I am $age years old.</p>";
        echo "<hr>";
    }    

    ShowInfo("Socheat", 20);
    ShowInfo("Dean", 35);
?>
</body>
</html>