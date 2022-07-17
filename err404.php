<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" href="/style.css" type="text/css"/>
  <meta charset="UTF-8">
  <title>Страница не существует || BeamCraft</title>
  <link href="/imag/icon.png" rel="shortcut icon" type="image/x-icon" />
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
  <header>
    <a href="/index.html"><img id="logo" src="/imag/logo.png" alt="Beam Craft"></a>
    <div class="dropdown-desk">
      <a href="/index.php#catalog">КАТАЛОГ</a>
      <a href="/questions/index.php">ЧАСТЫЕ ВОПРОСЫ</a>
      <a href="/blog/index.php">БЛОГ</a>
      <a href="/index.php#about">О НАС</a>
      <a href="#footer">КОНТАКТЫ</a>
    </div>
    <div id="dropdown" class="dropdown">
      <button id="mainmenubtn" class="mainmenubtn" OnClick="b()"><img id="menu" src="/imag/menu.png" alt="Beam Craft"></button>
      <div id="dropdown-child" class="dropdown-child" align="center">
        <div id="pystota2"></div>
        <div id="pystota3">
          <a href="/index.html#catalog">КАТАЛОГ</a>
          <a href="/questions/index.html">ЧАСТЫЕ ВОПРОСЫ</a>
          <a href="/blog/index.html">БЛОГ</a>
          <a href="/index.html#about">О НАС</a>
          <a href="#footer" OnClick="a()">КОНТАКТЫ</a>
        </div>
      </div>
    </div>
    <script language="JavaScript">
      function a()
      {
        document.getElementById('dropdown-child').classList.add('dropdown-child-new');
        document.getElementById('dropdown-child').classList.remove('dropdown-child');
        men = false;
      }
      var men = false;
      function b()
      {
        if (men == true ) {
          document.getElementById('dropdown-child').classList.add('dropdown-child-new');
          document.getElementById('dropdown-child').classList.remove('dropdown-child');
          men = false;
        }
        else {
          document.getElementById('dropdown-child').classList.add('dropdown-child');
          document.getElementById('dropdown-child').classList.remove('dropdown-child-new');
          men = true;
        }
      }
    </script>
  </header>
<div>
<div id="pystota"></div>
  <div class="blok" align="center">
    <big><big><big><big><h1>404 Error</h1></big></big></big></big>
    <big><big><h3>Страница не найдена</h3></big></big><br>
    <a class="button4" href="/index.php">Вернуться на гравную</a><br><br><br>
  </div>
  <div class="dropdown2">
    <button id="mainmenubtn2" class="mainmenubtn2" OnClick="c()"><img id="svaz" src="/imag/svaz.png" alt="Beam Craft"><img id="svaz-krest" src="/imag/svaz-krest.png" alt="Beam Craft"></button>
    <div id="dropdown-child2" class="dropdown-child2" align="center">
        <div><a href="tel: +79276096647"><img src="/imag/tel.png"></a><p>Позвонить</p></div>
        <div><a href="viber://add?number=79276096647"><img src="/imag/viber.png"></a><p>Viber</p></div>
        <div><a href="tg://resolve?domain=BeamCraft"><img src="/imag/teleg.png"></a><p>Telegram</p></div>
        <div><a href="form1/index.html"><img src="/imag/mss.png"></a><p>Написать нам</p></div>
    </div>
    <script type="text/javascript">
      function c() {
        var div = document.getElementById('dropdown-child2');
        if(div.style.visibility == 'visible') {
          div.style.visibility = 'hidden';
          div.style.opacity = '0';
          document.getElementById("svaz").style.display = 'block';
          document.getElementById("svaz-krest").style.display = 'none';
        }
        else {
          div.style.visibility = 'visible';
          div.style.opacity = '1';
          document.getElementById("svaz").style.display = 'none';
          document.getElementById("svaz-krest").style.display = 'block';
        }
      }
    </script>
  </div>
<a name="footer"></a>
</div>
<footer align="center">
  <img id="inscription" src="/imag/inscription.png" alt="Beam Craft">
  <div>
    <p><big>Связь с нами:</big></p>
    <p>Тел/Viber:<br>+7 (927) 609-66-47<br><br>Tg: <a href="tg://resolve?domain=BeamCraft">@BeamCraft<img id="inst" src="/imag/teleg.png"></a>
      <br>Inst: <a href="https://instagram.com/beamcraft.ru?igshid=mui9plae1t96">beamcraft.ru <img id="inst" src="/imag/inst.png"></a></p>
  </div>
</footer>
</body>
</html>
