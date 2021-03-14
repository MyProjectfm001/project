<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/sum.js"></script>
    <?php $title = $_POST['title']; ?>
    <title><?=$title?></title>
</head>
<body>
    <form action="bron.php" method="POST">
        <b>Выберите дату на которую хотите забронировать услуги:</b><br><br>
        <input type="date" name="date" required><br>
        <input type="hidden" name="title" value="<?=$title?>"><br>
        <input type="submit" value="Посмотреть места">
    </form>
</body>
</html>