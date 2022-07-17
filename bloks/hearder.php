<header>
  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '725342378374194');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=725342378374194&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  <a href="/index.php"><img id="logo" src="/imag/logo.png" alt="Beam Craft"></a>
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
      <div id="pystota3"><br>
        <a href="/index.php#catalog" OnClick="a()">КАТАЛОГ</a>
        <a href="/questions/index.php">ЧАСТЫЕ ВОПРОСЫ</a>
        <a href="/blog/index.php">БЛОГ</a>
        <a href="/index.php#about" OnClick="a();">О НАС</a>
        <a href="#footer" OnClick="a();">КОНТАКТЫ</a>
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
