<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
</head>
<body>
    <h2>Course Satisfaction Survey</h2>
    <form method = "POST" action = "">
        <label>Student Name:</label> <input type = "text" name="student_name" required><br><br>
        
        <label>How would you rate the course?</label><br>
        <input type = "ratio" name="rating" value = "Excellent" required> Excellent<br>
        <input type = "ratio" name="rating" value = "Good"> Good<br>
        <input type = "ratio" name="raiting" value = "Average"> Average<br>

        <label>Preffered Learning Mode:</label>
        <select name= "Mode">
            <option value = "Online">Online</option>
            <option value = "On Campus">On Campus</option>
            <option value = "Hybrid">Hybrid</option>
        </select>

        <label>Addtional Comments:</label><br>
        <textarea name = "comments" rows = "4" cols = "40"></textarea><br><br>
        
        <button type = "submit" name = "submit-survey">Submit Survey</button>
    </form>    

    <?php 
    if (isset($_POST['submit_survey'])) {
        $sname = htmlspecialchars($_POST['student_name']);
        $rating = $_POST['rating'];
        $mode = $_POST['mode'];
        $comments = htmlspecialchars($_POST['comments']);

        echo "<h3>Survey Summary:</h3>";
        echo "<p><strong>Student:</strong> $sname</p>";
        echo "<p><strong>Rating:</strong> $rating</p>";
        echo "<p><strong>Preferred Mode:</strong> $mode</p>";
        echo "<p><strong>Comments:</strong> " . ($comments ? $comments : "None") . "</p>";
    }
    
?>
</body>
</html>