<?php
require "login/in.php";
$kolvo = $mysql->query("SELECT COUNT(*) FROM `zakaz` ");
$kolvo1 = $mysql->query("SELECT COUNT(*) FROM `zakaz` ");
$kolvo2 = $kolvo1->fetch_row();
$kolvo = $kolvo2[0];

$kolvoposl = 0;
$kolvo_order = 0;
for ($id = $kolvo; $id > $kolvoposl; $id--):
 ?>
 <?php
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
 $moy = $massiv['moy'];
 $mne = $massiv['mne'];
if ($moy == 1 && ($oplat == 0 || $naklad == 0 || $kom == 0)):

 $sum = $oplat + $naklad + $kom;
 if($sum == 3){
    $color = 2;
} elseif($oplat == 1 && $naklad == 1 && $kom == 0){
    $color = 3;
} else{
    $color = 1;
}
if ($oplat == 0 || $naklad == 0) {
    $kolvo_order = $kolvo_order + 1;
}
 ?>

 <div class="order-div<?php echo $color ?>" id="<?php echo $id ?>" align="center">
   <table>
     <tr>
       <td>&nbsp&nbsp<?php echo $id ?></td>
       <td align="center"><?php echo $day, '&nbsp&nbsp&nbsp&nbsp'; if (1 == 1): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Изменить" OnClick="b(this);" ><?php endif; ?></td>
     </tr>
     <tr>
       <td>&nbspТов</td>
       <td>&nbsp<?php echo $tov ?></td>
     </tr>
     <tr>
       <td>&nbspГрав</td>
       <td>&nbsp<?php echo $grav ?></td>
     </tr>
     <tr>
       <td>&nbspЦена</td>
       <td>&nbsp<?php echo $chen, '₽ ', $mne, 'мне' ?></td>
     </tr>
     <tr>
       <td>&nbspКонт</td>
       <td>&nbsp<?php echo $kont ?></td>
     </tr>
     <tr>
       <td>&nbspДост</td>
       <td>&nbsp<?php echo $dost ?></td>
     </tr>
     <tr>
       <td>&nbspСрок</td>
       <td>&nbsp<?php echo $srok ?></td>
     </tr>
     <tr>
       <td>&nbspОплат</td>
       <?php if ($oplat == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $oplat, '&nbsp&nbsp&nbsp&nbsp'; if ($oplat == 0): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Теперь да" OnClick="a(this, 'oplat');" ><?php endif; ?></td>
     </tr>
     <tr>
       <td>&nbspНакл</td>
       <?php if ($naklad == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $naklad, '&nbsp&nbsp&nbsp&nbsp';  if ($naklad == 0): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Теперь да" OnClick="a(this, 'naklad');"><?php endif; ?></td>
     </tr>
     <tr>
       <td>&nbspКом</td>
       <?php if ($kom == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $kom, '&nbsp&nbsp&nbsp&nbsp'; if ($kom == 0): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Теперь да" OnClick="a(this, 'kom');"><?php endif; ?></td>
     </tr>
   </table>
 </div>
<?php endif; endfor; ?>

<?php for ($id = $kolvo; $id > $kolvoposl; $id--):
 ?>
 <?php
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
 $moy = $massiv['moy'];
 $mne = $massiv['mne'];
if ($moy == 1 && ($oplat == 1 && $naklad == 1 && $kom == 1)):

 $sum = $oplat + $naklad + $kom;
 if($sum == 3){
    $color = 2;
} elseif($oplat == 1 && $naklad == 1 && $kom == 0){
    $color = 3;
} else{
    $color = 1;
}
if ($oplat == 0 || $naklad == 0) {
    $kolvo_order = $kolvo_order + 1;
}
 ?>

 <div class="order-div<?php echo $color ?>" id="<?php echo $id ?>" align="center">
   <table>
     <tr>
       <td>&nbsp&nbsp<?php echo $id ?></td>
       <td align="center"><?php echo $day, '&nbsp&nbsp&nbsp&nbsp'; if (1 == 1): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Изменить" OnClick="b(this);" ><?php endif; ?></td>
     </tr>
     <tr>
       <td>&nbspТов</td>
       <td>&nbsp<?php echo $tov ?></td>
     </tr>
     <tr>
       <td>&nbspГрав</td>
       <td>&nbsp<?php echo $grav ?></td>
     </tr>
     <tr>
       <td>&nbspЦена</td>
       <td>&nbsp<?php echo $chen, '₽ ', $mne, 'мне' ?></td>
     </tr>
     <tr>
       <td>&nbspКонт</td>
       <td>&nbsp<?php echo $kont ?></td>
     </tr>
     <tr>
       <td>&nbspДост</td>
       <td>&nbsp<?php echo $dost ?></td>
     </tr>
     <tr>
       <td>&nbspСрок</td>
       <td>&nbsp<?php echo $srok ?></td>
     </tr>
     <tr>
       <td>&nbspОплат</td>
       <?php if ($oplat == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $oplat, '&nbsp&nbsp&nbsp&nbsp'; if ($oplat == 0): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Теперь да" OnClick="a(this, 'oplat');" ><?php endif; ?></td>
     </tr>
     <tr>
       <td>&nbspНакл</td>
       <?php if ($naklad == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $naklad, '&nbsp&nbsp&nbsp&nbsp';  if ($naklad == 0): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Теперь да" OnClick="a(this, 'naklad');"><?php endif; ?></td>
     </tr>
     <tr>
       <td>&nbspКом</td>
       <?php if ($kom == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $kom, '&nbsp&nbsp&nbsp&nbsp'; if ($kom == 0): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Теперь да" OnClick="a(this, 'kom');"><?php endif; ?></td>
     </tr>
   </table>
 </div>
<?php endif; endfor; $mysql->close(); ?>
<p class="p-top" align="center"> Привет, <a href="login/exit.php"><?php echo $_COOKIE['user'] ?></a> у тебя
   <big><?php echo $kolvo_order ?></big> заказа</p>

<script language="JavaScript">
function a(obj, tip) {

  var id = obj.id;
  document.location.href = "login/vipoln.php?id="+id+"&tip="+tip;
}
function b(obj) {

  var id = obj.id;
  document.location.href = "edit/index.php?id="+id;
}
</script>
