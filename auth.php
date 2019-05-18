<?php
if($_COOKIE['user']=='true')
  setcookie('user', 'true', time() - 3600, '/'); //последний пар-тр если на реальный домен вылаживать'.index.php'
else
  setcookie('user', 'true', time() + 3600, '/'); //последний пар-тр если на реальный домен вылаживать'.index.php'

header('Location: /index.php');

 ?>
