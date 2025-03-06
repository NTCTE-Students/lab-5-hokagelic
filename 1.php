<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $password_confirm = htmlspecialchars($_POST['password_confirm']);

    if ($password === $password_confirm && !empty($username) && !empty($password)) {
        // Логика для регистрации пользователя
    } else {
        // Ошибка
    }
}
