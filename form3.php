<?php

require 'function.php';
//require_once 'function.php';

$first_name = '';
$last_name = '';
$email = '';
$password = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $parametrs = ['first_name', 'last_name', 'email', 'password'];

    foreach ($parametrs as $parameter) {
        if (empty($_POST[$parameter])) {
            die('не найден элемент' . $parameter);
        }
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (saveUser($first_name, $last_name, $email, $password)) {
        $message = 'Пользователь зареган';
    } else {
        $message = 'Ошибка при регистрации';
    }
}

include 'form2.php';
