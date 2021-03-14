<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/sum.js"></script>
    <link rel="stylesheet" href="css/bron.css">
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slider.js"></script>
    <?php 
    $title = $_POST['title']; 
    $date ="'" . $_POST['date'] . "'";
    ?>
    <title><?=$title?></title>
</head>
<body>
    <div class="slider">
        <div class="slide">
            <img src="images/tanhai/1.jpeg" alt="">
            <img src="images/sendmoin/1.jpg" alt="">
            <img src="images/kenkeme/1.jpg" alt="">
        </div>
    </div>
    <h2><?=$title?></h2>
    <?php
    $title = '"' . $_POST['title'] . '"';
    // Подключение файла подключения
    require "php/connection.php";
    // Подключение к базе данных
    $link = mysqli_connect($host, $user, $user, $database)
        or die("Ошибка " . mysqli_error($link)); 
    // Запросы
    $query = "SELECT * FROM `services` WHERE `base_name` = $title";
    $sql = mysqli_query($link, $query);
    $query1 = "SELECT * FROM `bron` WHERE `date` = $date AND `base_name` = $title";
    $sql1 = mysqli_query($link, $query1);

    if ($sql1 and $sql) {
        echo "<form method='POST' action='php/bron2.php'>";
        if (mysqli_num_rows($sql1) == 0) {
            while ($result = mysqli_fetch_array($sql)) {
                echo "<input type='checkbox' name='ids[]' value='{$result['id']}'> {$result['name']} {$result['price']} рублей. Свободно<br>";
            }
        }else {
            while ($result1 = mysqli_fetch_array($sql1)) {
                $s = explode(',', $result1['service']);
                foreach ($s as $i) {
                    while ($result = mysqli_fetch_array($sql)) {
                        if ($i == $result['id']) {
                            echo "{$result['name']} Занято<br>";
                        }else {
                            echo "<input type='checkbox' name='ids[]' value='{$result['id']}'> {$result['name']} {$result['price']} рублей. Свободно<br>";
                        }
                    }
                    
                }
            }
        }
    }
    ?>
        <input type="submit" value="Забронировать">
    </form>
</body>
</html>