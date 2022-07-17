<div class="dropdown2">
  <button id="mainmenubtn2" class="mainmenubtn2" OnClick="c()"><img id="svaz" src="/imag/svaz.png" alt="Beam Craft"><img id="svaz-krest" src="/imag/svaz-krest.png" alt="Beam Craft"></button>
  <div id="dropdown-child2" class="dropdown-child2">
      <a href="tel: +79276096647"><img id="svazi4" src="/imag/tel.png"><p id="svazp4">Позвонить</p></a>
      <a href="viber://add?number=79276096647"><img id="svazi3" src="/imag/viber.png"><p id="svazp3">Viber</p></a>
      <a href="tg://resolve?domain=BeamCraft"><img id="svazi2" src="/imag/teleg.png"><p id="svazp2">Telegram</p></a>
      <a href="/form1/index.php"><img id="svazi1" src="/imag/mss.png"><p id="svazp1">Написать нам</p></a>
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
