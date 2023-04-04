<?php
require_once('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt_check_email = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt_check_email->execute([$email]);

    if ($stmt_check_email->fetchColumn() > 0) {
        echo "User with this email already exists";
    } else {
        $stmt_insert_user = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt_insert_user->execute([$email, $hash]);
        header('Location: Profile.html');
    }
}
