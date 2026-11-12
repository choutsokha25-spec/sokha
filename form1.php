<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<body>
    <form method="POST" action="">
        <label>Username:</label> 
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label> 
        <input type="password" name="password" required><br><br>
        
        <button type="submit" name="login">Login</button>
    </form>

    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "admin" && $password == "1234") {
            echo "<p style='color:green;'>Login successful!</p>";
        } else {
            echo "<p style='color:red;'>Invalid username or password.</p>";
        }
    }
    ?>
</body>
</html>