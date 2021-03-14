<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои бронирования</title>
</head>
<body>
    <?php 
    // Подключение файла подключения
    require "php/connection.php";
    // Подключение к базе данных
    $link = mysqli_connect($host, $user, $user, $database)
        or die("Ошибка " . mysqli_error($link)); 

    $query2 = "SELECT * FROM `bron` WHERE `user_id` = {$_COOKIE['user_id']}";
    

    $sql = mysqli_query($link, $query2);

    if($sql) {
        while ($result = mysqli_fetch_array($sql)) {
            $query1 = "SELECT * FROM `services` WHERE `base_name` = '{$result['base_name']}'";
            echo $result['bron_id'];
            "<div>
                Номер бронирования: $result['bron_id'];<br>
                Что забронировал: ыук
            </div>"
        }
    }
    ?>
</body>
</html>