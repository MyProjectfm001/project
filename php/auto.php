<?php

$email = $_POST['email'];
$password = $_POST['password'];

$password1 = md5($password);
// Подключение файла подключения
require "connection.php";
// Подключение к базе данных
$link = mysqli_connect($host, $user, $user, $database)
    or die("Ошибка " . mysqli_error($link)); 

$query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password1'";
$res = mysqli_query($link, $query)
    or die("Ошибка " . mysqli_error($link));

if ($res) {
    $results = mysqli_fetch_array($res);
    $email2 =  $results['email'];
    $pass =  $results['password'];
    if ($email == $email2) {
        if ($password1 == $pass) {
            $name = $results['name'];
            $lastname = $results['lastname'];
            $number = $results['number'];
            $password2 = $results['password'];
            $id = $results['id'];
            setcookie('auth', "1", time() + 3600 * 24 * 30, "/");
            setcookie('user_id', $id, time() + 3600 * 24 * 30, "/");
            setcookie('name', "$name", time() + 3600 * 24 * 30, "/");
            setcookie('lastname', "$lastname", time() + 3600 * 24 * 30, "/");
            setcookie('number', "$number", time() + 3600 * 24 * 30, "/");
            setcookie('password', "$password", time() + 3600 * 24 * 30, "/");
            if ($_COOKIE['error']){
                unset($_COOKIE['error']);
                setcookie('error', null, -1, "/");
            }
            
            header('Location: ../index.php');
        }
        else {
            setcookie('error', 'Пароль или электронная почта неверно написаны.', time() + 3600, "/");
            header('Location: ../autoriz.php');
        }
    }
    else {
        setcookie('error', 'Пароль или электронная почта неверно написаны.', time() + 3600, "/");
        header('Location: ../autoriz.php');
    }
}

// Закрытие соедининения
mysqli_close($link);
?>