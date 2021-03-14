<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/kenkeme.css">
    <script src="js/jquery.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/slider.js"></script>
    <?php $title = "Турбаза 'Кэнкэмэ'" ?>
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
    <div class="container">
        <ul><b>Туристические услуги:</b> 
            <li>-спортивная охота на водоплавающую дичь;</li>
            <li>-зимняя и летняя рыбалка;</li>
            <li>-водные аттракционы;</li>
            <li>-прогулки по реке на моторной лодке;</li>
            <li>-катание на снегоходе;</li>
            <li>-сбор дикоросов (зеленый лук, ягоды, грибы) и т.д.</li>
        </ul>
        <b>Дополнительные услуги:</b> доставка клиентов (с лодочной станции с. Графский Берег) на ближайшие острова для отдыха и рыбалки по договоренности.
    </div>
    <b>Местонахождение: go.2gis.com/8ala3l<br></b>
    На базе 3 гостевых домика, с комфортным размещением 7 человек.
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
        <li>-Есть постоянное электричество.</li>
        <li>-Есть посуда мангальная зона, костровое снаряжение.</li>
        <li>-Связи пока нет</li>
        <li>-Вода от реки (Питьевую воду принесите с собой).</li>
        <li>-Каток</li>
        <li>-Имеется трансфер</li>
    </ul>
    <ul><b>Прейскурс цен:</b>
        <li>-Аренда домика в сутки 7000 рублей.</li>
        <li>-Аренда домика на день 5000 рублей.</li>
    </ul>
     -->
    <b>Контакты:</b><br>
    -Instagram: @turbaza_kenkeme<br>
    -Моб. Телефон: 89141105935<br>
    <b>Как дойти до нас:</b><br>
    Проезд через с. Намцы в сторону с. Тастах с поворотом направо недоезжая до Тастахского моста. По зелёному баннеру справа.<br>
    От трассы до турбазы 4 километра.<br><br><br>
    
    
</body>
</html>