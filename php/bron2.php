<?php

require "connection.php";

// Подключение к базе данных
$link = mysqli_connect($host, $user, $user, $database)
or die("Ошибка " . mysqli_error($link)); 

$ids = $_POST['ids'];
$s = '';
foreach ($ids as $t) {
    $s = $s . $t . ',';
}
$s = '"' . $s . '"';
echo $date;
$query2 = "INSERT INTO `bron` (`user_id`, `base_name`, `service`, `date`, `price`) VALUES ({$_COOKIE['user_id']}, $title, $s, $date, 0)";
// $query22 = "INSERT INTO `bron` (`user_id`, `base_name`, `service`, `date`, `price`) VALUES ($_COOKIE['user_id'], $title, $s, '$date', 0)";

$sql3 = mysqli_query($link, $query2);

header("Location: ../index.php");

?>
example@gmail.com
