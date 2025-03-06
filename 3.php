<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if (strlen($username) >= 4 && !empty($password)) {
        // Логика для входа в систему
    } else {
        // Ошибка
    }
}