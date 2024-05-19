<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}

$mysqli = new mysqli("localhost", "root", "", "quiz_db");
$result = $mysqli->query("SELECT * FROM questions");
$questions = $result->fetch_all(MYSQLI_ASSOC);

$score = 0;
foreach ($questions as $question) {
    $questionId = $question['id'];
    if (isset($_POST['question' . $questionId]) && $_POST['question' . $questionId] == $question['answer']) {
        $score++;
    }
}

$totalQuestions = count($questions);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Quiz Result</h1>
        <p>You scored <?php echo $score; ?> out of <?php echo $totalQuestions; ?>.</p>
        <a href="quiz.php" class="submit-btn">Try Again</a>
    </div>
</body>
</html>
