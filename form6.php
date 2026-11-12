<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Strength Evaluato</title>
</head>
<body>
     <h2>Check your Password Security</h2>
    <form method = "POST" action="">
        <label>Enter Password:</label>
        <input type = "password" name = "user_password" required>
        <button type = "submit" name = "check_pass">Evaluate</button>
    </form>

    <?php 
    
    function evaluatePaswordStrength($password){
        $length = strlen($password);

        if ($length < 6){
            return "Weak (Less than 6 Characters)";
        }elseif ($length >= 6 && $length <= 10){
            return "Moderate (6 to 10 Characters";
        }else{
            return "Strong (More than 10 Characters";
        }
    }    

    if (isset($_POST['check_pass'])){
        $inputPassword = $_POST['user_password'];

        $strengthResult = evaluatePaswordStrength($inputPassword);

        echo "<h3>Evaluate Result: </h3>";
        echo "<p>Password Status: <strong>$strengthResult</strong></p>";
    }
    
    
    ?>

</body>
</html>