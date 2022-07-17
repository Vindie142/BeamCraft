<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);



  require "in.php";
  $result = $mysql->query("SELECT * FROM `users` WHERE `login` =
  '$login' AND `pass` = '$pass' ");
  $user = $result->fetch_assoc();
  if(count($user) == 0) {
    echo "Такого пользователя нет";
    exit();
  }

  setcookie('user', $user['login'], time() + 7776000, "/");

  $mysql->close();

  header('Location: /order');
?>
