<?php 
// if ($_COOKIE['auth'] == "1") {
//     echo $_COOKIE['name'];
//     echo $_COOKIE['lastname'];
//     echo $_COOKIE['number'];
//     echo $_COOKIE['password'];
// }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slider.js"></script>
    <title>Главная</title>
</head>
<body>
    <div class="container">
        <?php
                if ($_COOKIE['auth'] <> "1"){
                    echo '<a class="bottom" href="autoriz.php">Войти</a><br><a class="bottom" href="reg.html">Регистрация</a><br>';
                }else {
                    echo "<a class='bottom' href='brons.php'>Мои бронирования</a><br><a class='bottom' href='php/exit.php'>Выйти</a>";
                }
                
                ?>  
    </div>

    <div class="container">
        <br>
        <h1>Рекомендации</h1><br>
        <div class="slider">
            <div class="slide">
                <div class="slider__item">
                    <img src="images/kenkeme/1.jpg" alt="">
                    <a href="kenkeme.php">Кэнкэмэ</a>
                </div>
                <div class="slider__item">
                    <img src="images/tanhai/1.jpeg" alt="">
                    <a href="tanhai.php">Танхай</a>
                </div>
                <div class="slider__item">
                    <img src="images/sendmoin/1.jpg" alt="">
                    <a href="sendmoin.php">Песчаная гора</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container"><br>
        <h2>Другие турбазы <a href="bases.php" class="right">см. все</a></h2><br> 
        <div class="container_bases">
            <div class="base">
                <img src="images/sendmoin/icon.png" alt="Картинка турбазы">
            </div>
            <div class="base">
                <img src="images/tanhai/icon.png" alt="Картинка турбазы">
            </div>
            <div class="base">
                <img src="images/kenkeme/icon.png" alt="Картинка турбазы">
            </div>
        </div>
    </div>
    
</body>
</html>