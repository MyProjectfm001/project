<?php

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];

$password = md5($password);
// Подключение файла подключения
require "connection.php";
// Подключение к базе данных
$link = mysqli_connect($host, $user, $user, $database)
    or die("Ошибка " . mysqli_error($link)); 
// Занос данных в базу данных
$query = "INSERT INTO `users` (`email`, `name`, `number`, `lastname`, `password`) VALUES ('$email', '$name', '$number', '$lastname', '$password')";
$res = mysqli_query($link, $query);

if ($res == 1) {

    header('Location: ../autoriz.php');
}

// Закрытие соедининения
mysqli_close($link);

?>