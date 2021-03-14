<?php
unset($_COOKIE['user_id']);
setcookie('user_id', "$id", time() + 3600 * 24 * 30, "/");
unset($_COOKIE['auth']);
setcookie('auth', null,-1, '/');
unset($_COOKIE['name']);
setcookie('name', null,-1, '/');
unset($_COOKIE['lastname']);
setcookie('lastname', null,-1, '/');
unset($_COOKIE['number']);
setcookie('number', null,-1, '/');
unset($_COOKIE['password']);
setcookie('password', null,-1, '/');
header("Location: ../index.php");
?>