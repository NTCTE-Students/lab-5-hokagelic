<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);

    if (!empty($name) && !empty($date) && !empty($time)) {
        // Логика для бронирования
    } else {
        // Ошибка
    }
}