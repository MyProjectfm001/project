<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = "Турбаза 'Танхай'"; ?>
    <link rel="stylesheet" href="css/kenkeme.css">
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slider.js"></script>
    <title><?=$title?></title>
</head>
<body>
    <div class="slider">
        <div class="slide">
            <div class="slider__item">
                <img src="images/kenkeme/1.jpg" alt="">
            </div>
            <div class="slider__item">
                <img src="images/kenkeme/2.jpg" alt="">
            </div>
            <div class="slider__item">
                <img src="images/kenkeme/3.jpg" alt="">
            </div>
        </div>
    </div>
    <form action="bron1.php" method="POST">
        <input type="hidden" name="title" value="<?=$title?>">
        <input type="submit" value="Забронировать">
    </form>
    <b>Местонахождение: Близ села Крест-Кытыл и Никольский<br></b>
    На базе 3 гостевых домика.
    <ul><b>Услуги и цены:</b><br>
        <?php 
        require "php/connection.php";
        // Подключение к базе данных
        $link = mysqli_connect($host, $user, $user, $database)
            or die("Ошибка " . mysqli_error($link)); 
        $title = '"' . $title . '"';
        $query = "SELECT * FROM `services` WHERE `base_name` = $title";
        $res = mysqli_query($link, $query);
        if ($res) {
            while ($result = mysqli_fetch_array($res)) {
                echo "-{$result['name']} {$result['price']} рублей.<br>";
            }
        }else {
            echo 'sdfs';
        }
        ?>

    </ul>
    <!-- <ul><b>Услуги:</b>
        <li>-Активный отдых.</li>
        <li>-Есть постоянное электричество.</li>
        <li>-Есть посуда, мангальная зона.</li>
        <li>-Игровой дом.</li>
        <li>-Уютные домики.</li>
        <li>-Сноубординг.</li>
        <li>-Горные склоны.</li>
        <li>-Имеется трансфер.</li>
    </ul>
    <b>Прейскурс цен:</b>
    <ul><b>На лето:</b>
        <li>-Гостевой домик - 1000 рублей с человека в сутки.</li>
        <li>-Игровой домик - 500 рублей с человека (без ночевки).</li>
        <li>-Аренда палатки на горе 2 человека 3500 рублей в сутки.</li>
    </ul>
    <ul><b>На зиму:</b>
        <li>-Аренда домика в сутки 1000 рублей.</li>
        <li>-Аренда домика на день 500 рублей.</li>
    </ul> -->
    
    <b>Контакты:</b><br>
    -Instagram: @tanhai<br>
    -Моб. Телефон: 89247640764 Андрей Сергеевич<br>
    <b>Как дойти до нас:</b><br>
    Проезд налево (если со стороны Якутска) между с. Никольский и с. Крест-Кытыл и дальше едете по меткам.<br>
    <br><br><br><br><br>
    
</body>
</html>