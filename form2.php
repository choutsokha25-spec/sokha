<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form method="POST" action="">
        <label>Username:</label> <input type="text" name="username" required><br><br>
        <label>Password:</label> <input type="password" name="password" required><br><br>
        <label>Email:</label> <input type="email" name="email" required><br><br>
        <button type="submit" name="register">Register</button>
    </form>

    <?php
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // Here you would typically save the user data to a database
        echo "<p>Registration successful!</p>";
    }
    ?>
</body>
</html>