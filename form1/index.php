<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" href="../style.css" type="text/css"/>
  <meta charset="UTF-8">
  <title>Написать нам || BeamCraft</title>
  <link href="../imag/icon.png" rel="shortcut icon" type="image/x-icon" />
  <meta name="description" content="Мастерская по дереву">
  <meta name="keywords" content="Доски,дерево,мастерская,столик,столешница">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Vindie">
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(68684089, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/68684089" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</head>
<body>
  <?php include "../bloks/hearder.php"; ?>
<div>
  <div id="pystota"></div>
  <div class="blok" align="center">
    <h1 align="center">Напишите, и мы ответим удобным способом</h1><br>
  </div>
  <div class="blok">
    <form class="form1" action="send.php" method="post">
      <label><h3>Ваше имя:</h3></label>
      <input class="textbox" type="text" name="user_name" placeholder="Саша" required /> <br>
      <label><h3>Где вам ответить?</h3></label>
      <input  class="textbox" type="text" list="form-tip-svaz" name="spossvaz" placeholder="Viber" required />
      <datalist id="form-tip-svaz">
        <option value="Viber">
        <option value="Telegram">
        <option value="Вконтакте">
        <option value="Звонок">
        <option value="Почта">
        <option value="СМС сообщение">
      </datalist><br>
      <label><h3>Контакты:</h3></label>
      <input class="textbox" type="text" name="contact" placeholder="8927-477-12-43" required /> <br>
      <label><h3>Сообщение:</h3></label>
      <input class="message" type="text" name="message" placeholder="Напишите ваш вопрос"> <br>
      <input name="submit" class="button" type="submit" value="Отправить" />
    </form>
  </div>
<a name="footer"></a>
</div>
<?php include "../bloks/footer.php"; ?>
</body>
</html>
