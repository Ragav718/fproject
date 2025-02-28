<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shadow Monarch</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('background.png'); /* Replace with your image URL */
            background-size: cover; /* Ensures the image covers the entire screen */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents repeating */
            height: 100vh; /* Ensures the body takes the full height of the screen */
            margin: 0; /* Removes default margin */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
        <p>Congratulations on becoming a member of the Shadow Monarch!!!</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
