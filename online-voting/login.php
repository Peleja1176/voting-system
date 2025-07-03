<?php
session_start();
require 'db.php';

if (isset($_POST['email'], $_POST['password'])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$_POST['email']]);
    $user = $stmt->fetch();

    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        echo "success";
    } else {
        echo "Invalid credentials";
    }
}
?>
