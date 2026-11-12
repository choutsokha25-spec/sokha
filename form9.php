<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getSystemVersion</title>
</head>
<body>
    <?php
    function getSystemVersion() {

        return "System Version 1.0.0";

    } 

    $version = getSystemVersion();
    echo "<h1>$version</h1>";    
    
?>
</body>
</html>