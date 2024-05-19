<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}

$mysqli = new mysqli("localhost", "root", "", "quiz_db");
$result = $mysqli->query("SELECT * FROM questions");
$questions = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Online Quiz</h1>
        <form method="post" action="result.php">
            <?php foreach ($questions as $index => $question): ?>
                <div class="form-group">
                    <p><?php echo ($index + 1) . '. ' . $question['question']; ?></p>
                    <label>
                        <input type="radio" name="question<?php echo $question['id']; ?>" value="1" required>
                        <?php echo $question['option1']; ?>
                    </label>
                    <label>
                        <input type="radio" name="question<?php echo $question['id']; ?>" value="2" required>
                        <?php echo $question['option2']; ?>
                    </label>
                    <label>
                        <input type="radio" name="question<?php echo $question['id']; ?>" value="3" required>
                        <?php echo $question['option3']; ?>
                    </label>
                    <label>
                        <input type="radio" name="question<?php echo $question['id']; ?>" value="4" required>
                        <?php echo $question['option4']; ?>
                    </label>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
