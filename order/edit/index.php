<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" href="../style-order.css" type="text/css"/>
  <meta charset="UTF-8">
  <title>Исправить заказик</title>
  <link href="../../imag/icon.png" rel="shortcut icon" type="image/x-icon" />
  <meta name="description" content="Мастерская по дереву">
  <meta name="keywords" content="Доски,дерево,мастерская,столик,столешница">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Vindie">
</head>
<body>
  <?php
    if($_COOKIE['user'] == ''):
   ?>
   <div class="blok" align="center">
     <div class="blok-new">
       <form class="form-log" action="../login/check.php" method="post">
         <label>Логин</label>
         <input class="textbox" type="text" name="login" /><br>
         <label>Пароль</label>
         <input class="textbox" type="text" name="pass" /><br>
         <input name="submit" class="button" type="submit" value="Войти" />
       </form>
     </div>
   </div>
  <?php else: ?>
<div>
  <?php
    $id = $_GET['id'];
    require "../login/in.php";
    $result = $mysql->query("SELECT * FROM `zakaz` WHERE `id` =
    '$id' ");
    $massiv = $result->fetch_assoc();

    $day = $massiv['day'];
    $tov = $massiv['tov'];
    $grav = $massiv['grav'];
    $chen = $massiv['chen'];
    $kont = $massiv['kont'];
    $dost = $massiv['dost'];
    $srok = $massiv['srok'];
    $oplat = $massiv['oplat'];
    $naklad = $massiv['naklad'];
    $kom = $massiv['kom'];
    $gotov = $massiv['gotov'];
    $mne = $massiv['mne'];
    $rasch = $massiv['rasch'];
    $zatrat = $massiv['zatrat'];
   ?>
  <div class="blok-new">
    <form class="form1" action="send.php" method="post">
      <input class="textbox" type="hidden" name="id" value="<?php echo $id ?>" />
      <span align="center"><h2><?php echo "№ ", $id, "   /   ", $day ?></h2></span>
      <label>Товар</label>
      <textarea class="textbox" type="text" name="tov" ><?php echo $tov ?></textarea><br>
      <label>Гравировка</label>
      <textarea class="textbox" type="text" name="grav" ><?php echo $grav ?></textarea><br>
      <label>Цена</label>
      <textarea class="textbox" type="text" name="chen" ><?php echo $chen ?></textarea><br>

      <?php if ($_COOKIE['user'] == 'Vindie'){ ?>
        <label>Мне</label>
        <textarea class="textbox" type="text" name="mne" ><?php echo $mne ?></textarea><br>
      <?php } elseif ($_COOKIE['user'] == 'CDTuxo'){?>
        <label>Затраты</label>
        <textarea class="textbox" type="text" name="zatrat" ><?php echo $zatrat ?></textarea><br>
      <?php } ?>

      <label>Контакты</label>
      <textarea class="textbox" type="text" name="kont" ><?php echo $kont ?></textarea><br>
      <label>Доставка</label>
      <textarea class="textbox" type="text" name="dost" ><?php echo $dost ?></textarea><br>
      <label>Срок</label>
      <textarea class="textbox" type="text" name="srok" ><?php echo $srok ?></textarea><br>

      <?php if ($_COOKIE['user'] == 'Vindie'){ ?>
      <label>Оплатила</label>
      <input class="custom-radio" type="radio" name="oplat" value="0" <?php if ($oplat == 0) {echo "checked";} ?>/>Нет
      <input class="custom-radio" type="radio" name="oplat" value="1" <?php if ($oplat == 1) {echo "checked";} ?>/>Да<br><br>
      <label>Накладная ей</label>
      <input class="custom-radio" type="radio" name="naklad" value="0" <?php if ($naklad == 0) {echo "checked";} ?>/>Нет
      <input class="custom-radio" type="radio" name="naklad" value="1" <?php if ($naklad == 1) {echo "checked";} ?>/>Да<br><br>
      <label>Комиссия</label>
      <input class="custom-radio" type="radio" name="kom" value="0" <?php if ($kom == 0) {echo "checked";} ?>/>Нет
      <input class="custom-radio" type="radio" name="kom" value="1" <?php if ($kom == 1) {echo "checked";} ?>/>Да<br><br>

      <?php } elseif ($_COOKIE['user'] == 'CDTuxo'){ ?>
      <label>Готовность</label>
      <input class="custom-radio" type="radio" name="gotov" value="0" <?php if ($gotov == 0) {echo "checked";} ?>/>Нет
      <input class="custom-radio" type="radio" name="gotov" value="1" <?php if ($gotov == 1) {echo "checked";} ?>/>Да<br><br>
      <label>Рассчитался</label>
      <input class="custom-radio" type="radio" name="rasch" value="0" <?php if ($rasch == 0) {echo "checked";} ?>/>Нет
      <input class="custom-radio" type="radio" name="rasch" value="1" <?php if ($rasch == 1) {echo "checked";} ?>/>Да<br><br>
      <?php } ?>
      <input name="submit" class="button" type="submit" value="Исправить" />
    </form>
  </div>
  <a href="../index.php"><img id="exit" src="../imag/exit.png"></a>

</div>
<?php endif;
$mysql->close();?>
</body>
</html>
