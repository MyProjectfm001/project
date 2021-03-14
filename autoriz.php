<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/auto.css">
    <title>Авторизация</title>
</head>
<body>
    <?php
    if ($_COOKIE['error']){
        echo $_COOKIE['error'];
    }
    ?>
    <form action="php/auto.php" method="POST" class="center_form">
        <img src="images/logo.png" alt="Логотип сайта" class="logo">
        <input name="email" type="email" placeholder="Введите email" required>
        <input name="password" type="password" placeholder="Введите пароль" required>
        <input type="submit" value="Войти">
        или<br><br>
        <b><a href="reg.html">Регистрация</a></b><br><br>
    </form>
</body>
</html>
