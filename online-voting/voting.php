<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Voting Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Welcome to Voting</h2>
    <form method="POST">
        <select name="candidate" required>
            <option value="">Choose a candidate</option>
            <option value="Candidate A">Candidate A</option>
            <option value="Candidate B">Candidate B</option>
        </select>
        <button type="submit">Submit Vote</button>
    </form>
    <br>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
