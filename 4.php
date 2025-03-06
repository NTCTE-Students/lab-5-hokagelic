<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Логика для подписки на рассылку
    } else {
        // Ошибка
    }
}
