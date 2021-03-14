<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = "Турбаза 'Песчаная гора'"; ?>
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
    <b>Местонахождение: На правом берегу великой реки Лена в Намском районе Якутии в 100км от г. Якутска.<br></b>
    На турбазе имеются 6 гостевых домиков, со всеми необходимыми аттрибутами для автономного и комфортного проживания. Имеется 
    дом для корпоративных мероприятий вместимостью до 50 человек.<br>
    В шаговой доступности растут дикоросы: брусника, грибы, шиповник. На реке ловится щука, окунь, плотва, и другие.
    <!-- <ul><b>Услуги:</b>
        <li>-Есть постоянное электричество.</li>
        <li>-Аренда домиков.</li>
        <li>-Баня</li>
        <li>-Гараж</li>
        <li>-Спортивная и детские площадки.</li>
        <li>-Фотозоны.</li>
        <li>-Музей СССР.</li>
        <li>-Пляж с водным аттракционом.</li>
        <li>-Cпортинг.</li>
        <li>-Рыбалка.</li>
        <li>-Зимний ледовый аттракцион.(Во время зимы)</li>
        
    </ul>
    <b>Прейскурс цен:</b>
    <ul><b>На лето:</b>
        <li>-Рыбалка.(Оборудование приносите сами).</li>
        <li>-Игровой домик - 500 рублей с человека (без ночевки).</li>
        <li>-Аренда палатки на горе 2 человека 3500 рублей в сутки.</li>
    </ul>
    <ul><b>На зиму:</b>
        <li>-Аренда домика в сутки \ рублей.</li>
        <li>-Аренда домика на день . рублей.</li>
    </ul> -->
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
    <b>Контакты:</b><br>
    -Instagram: @turbaza_peschanaya_gora<br>
    -Моб. Телефон: 89627332222(10:00-19:00)<br>
    <b>Как дойти до нас:</b><br>
    Проезд через с. Намцы в сторону с. Тастах с поворотом направо недоезжая до Тастахского моста. По зелёному баннеру справа.<br>
    От трассы до турбазы 4 километра.<br><br><br><br><br><br>
    
    
</body>
</html>