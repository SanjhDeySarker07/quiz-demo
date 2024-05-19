<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "quiz_db");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $result = $mysqli->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        header("Location: quiz.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Student Login</h1>
        <form method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <?php if (!empty($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <button type="submit" class="submit-btn">Login</button>
        </form>
    </div>
</body>
</html>
