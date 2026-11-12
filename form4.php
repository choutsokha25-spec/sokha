<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Help</title>
</head>
<body>
     <h2>Get Help</h2>
    <form method = "POST" action = "">
        <label>Your Name:</label><input type = "text" name = "sender" required><br><br>
        <label>Email:</label><input type = "email" name = "contact_email" required><br><br>

        <label>Issue Category:</label>
        <select name = "category">
            <option value = "Account Access">Account Access</option>
            <option value = "Bill Issues">Bill Issues</option>
            <option value = "Technical Support">Technical Support</option>
            <option value = "Other">Other</option>
        </select><br><br>

        <label>Describe Your Issue:</label><br>
        <textarea name = "issue_description" rows = "5" cols = "40" required></textarea><br><br>
        <button type = "submit" name = "send-ticket">Submit</button>
    </form>

    <?php
    if (isset($_POST['send-ticket'])) {
        $sender = htmlspecialchars($_POST['sender']);
        $email = htmlspecialchars($_POST['contact_email']);
        $category = $_POST['category'];
        $issue_description = htmlspecialchars($_POST['issue_description']);

        echo "<h3>Help Ticket Submitted:</h3>";
        echo "<p><strong>Name:</strong> $sender</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Category:</strong> $category</p>";
        echo "<p><strong>Issue Description:</strong> $issue_description</p>";
    }
    ?>
</body>
</html>