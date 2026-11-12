<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Ticket Priority Calculate</title>
</head>
<body>
    <h2>Help Desk Priority Estimator</h2>
    <form method = "POST" action="">
        <label>System Severity Score ( 1 to 5 ):</label>
        <input type = "number" name = "severity" min="1" max="5"><br><br>

        <label>Affected Users Count:</label>
        <input type = "number" name = "affected_users" min="0"><br><br>
        <button type = "submit" name = "calculate-priority">Calculate Priority</button>
    </form>

    <?php
    function calculateResponseTime($severity, $userCount){
        if ($severity >= 4 || $userCount >= 50){
            return 1.5;
        }else if ($severity == 3){
            return 6.0;
        }else{
            return 24.0;
        }
    }

    if (isset($_POST['calculate-priority'])) {
        $sev = intval($_POST['severity']);
        $users = intval($_POST['affected_users']);

        $estimatedHours = calculateResponseTime($sev, $users);

        echo "<h3>Priority Analysis:</h3>";
        echo "<p>Severity Rating: $sev /5 </p>";
        echo "<p>Affected Users: $users </p>";
        echo "<p><strong>Estimated Support Response Time: " . number_format($estimatedHours,1) . " hours</strong></p>";
    }
    ?>
</body>
</html>