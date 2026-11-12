<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Grade with 3 subject</title>
</head>
<body>
    <?php 
    function CalculateGrade($subject1, $subject2, $subject3){
        return ($subject1 + $subject2 + $subject3) / 3;
    }    

    $average = CalculateGrade(70, 95, 88);
    echo "<p>$average: " . number_format($average, 3) . "  </p>";

?>
</body>
</html>