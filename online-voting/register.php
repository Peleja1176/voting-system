<?php
session_start();
require 'db.php';

if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    
    try {
        $stmt->execute([$email, $password]);
        echo "success";
    } catch (PDOException $e) {
        echo "Email already exists";
    }
}
?>
