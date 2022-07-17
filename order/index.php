<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" href="style-order.css" type="text/css"/>
  <meta charset="UTF-8">
  <title>Любимые заказы</title>
  <link href="../imag/icon.png" rel="shortcut icon" type="image/x-icon" />
  <link rel="icon" href="https://beamcraft.ru/favicon.ico" type="image/x-icon">
  <meta name="description" content="Мастерская по дереву, менажницы, винницы из дерева, винный столик со складными ножками">
  <meta name="yandex-verification" content="ad92667e5bb8b48b" />
  <meta name="google-site-verification" content="fTyIc7Szzr-gbdfvMPKazcWn89GxaF4qxx7AmnqjKCQ" />
  <meta name="keywords" content="Доски,дерево,мастерская,столик,столешница">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Vindie">
</head>
<body>
  <?php
    if($_COOKIE['user'] == ''){
   ?>
   <div class="blok" align="center">
     <div class="blok-new">
       <form class="form-log" action="login/check.php" method="post">
         <label>Логин</label>
         <input class="textbox" type="text" name="login" /><br>
         <label>Пароль</label>
         <input class="textbox" type="text" name="pass" /><br>
         <input name="submit" class="button" type="submit" value="Войти" />
       </form>
     </div>
   </div>
 <?php } elseif ($_COOKIE['user'] == 'Vindie'){ ?>
<div class="blok" align="center">
  <div id="pystota"></div>
  <?php include 'zakaz-iz-bazi-vindie.php'; ?>

  <a href="new/index.php"><img id="plas" src="imag/plas.png"></a>

</div>
<?php } elseif ($_COOKIE['user'] == 'CDTuxo'){ ?>
  <div class="blok" align="center">
    <div id="pystota"></div>
    <?php include 'zakaz-iz-bazi-cdtuxo.php'; ?>

    <a href="new/index.php"><img id="plas" src="imag/plas.png"></a>

  </div>
<?php } ?>
</body>
</html>
