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
 $dost = str_replace(array("\r\n", "\r", "\n"), ' ',  strip_tags($massiv['dost']));
 $srok = $massiv['srok'];
 $kom = $massiv['kom'];
 $moy = $massiv['moy'];
 $gotov = $massiv['gotov'];
 $mne = $massiv['mne'];
 $rasch = $massiv['rasch'];
 $zatrat = $massiv['zatrat'];
if ($gotov == 0 || $rasch == 0 || ($moy == 1 && $kom == 0)) {
 if($gotov == 1 && ( $rasch == 0 || ($moy == 1 && $kom == 0))){
    $color = 3;
} elseif($gotov == 1 && $rasch == 1){
    $color = 2;
} else{
    $color = 1;
}
if ($gotov == 0) {
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
       <td>&nbsp<?php echo $chen, '₽' ?></td>
     </tr>
     <tr>
       <td>&nbspЗатр</td>
       <td>&nbsp<?php echo $zatrat, '₽' ?></td>
     </tr>
     <tr>
       <td>&nbspАрт</td>
       <td>&nbsp<?php
        if ($moy == 1 && $gotov == 1) {
          $poprav = $mne/2;
          $art = (($chen - $zatrat)/2)-$poprav;
          echo $art, '₽';
        }
        if ($moy == 0 && $gotov == 1) {
          $art = ($chen - $zatrat)/2;
          echo $art, '₽';
        }
        ?></td>
     </tr>
     <tr>
       <td>&nbspАлек</td>
       <td>&nbsp<?php
       if ($moy == 1 && $gotov == 1) {
         $poprav = $mne/2;
         $alek = ($zatrat + (($chen - $zatrat)/2))-$poprav;
         echo $alek, '₽';
       }
       if ($moy == 0 && $gotov == 1) {
         $alek = $zatrat + (($chen - $zatrat)/2);
         echo $alek, '₽';
       }
       ?></td>
     </tr>

     <tr>
       <td>&nbspКонт</td>
       <td>&nbsp<?php echo $kont ?></td>
     </tr>
     <tr>
       <td>&nbspДост</td>
       <td>&nbsp<?php echo $dost, '&nbsp&nbsp&nbsp&nbsp'?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Копировать" OnClick="c(this, '<?php echo $dost ?>');" ></td>
     </tr>
     <tr>
       <td>&nbspСрок</td>
       <td>&nbsp<?php echo $srok ?></td>
     </tr>
     <tr>
       <td>&nbspГот</td>
       <?php if ($gotov == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $gotov, '&nbsp&nbsp&nbsp&nbsp'; if ($gotov == 0): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Теперь да" OnClick="a(this, 'gotov');" ><?php endif; ?></td>
     </tr>
     <tr>
       <td>&nbspРасч</td>
       <?php if ($rasch == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $rasch, '&nbsp&nbsp&nbsp&nbsp'; if ($rasch == 0): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Теперь да" OnClick="a(this, 'rasch');" ><?php endif; ?></td>
     </tr>
     <?php if ($moy == 1){ ?>
     <tr>
       <td>&nbspВит</td>
       <?php if ($kom == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $mne, '₽' ?></td>
     </tr>
   <?php } ?>
   </table>
 </div>
<?php }endfor?>

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
 $dost = str_replace(array("\r\n", "\r", "\n"), ' ',  strip_tags($massiv['dost']));
 $srok = $massiv['srok'];
 $kom = $massiv['kom'];
 $moy = $massiv['moy'];
 $gotov = $massiv['gotov'];
 $mne = $massiv['mne'];
 $rasch = $massiv['rasch'];
 $zatrat = $massiv['zatrat'];
if (($gotov == 1 && $rasch == 1 && $moy == 0) || ($moy == 1 && $gotov == 1 && $rasch == 1 && $kom == 1)) {
 if($moy == 1 && $gotov == 1 && $kom == 0){
    $color = 3;
} elseif($gotov == 1){
    $color = 2;
} else{
    $color = 1;
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
       <td>&nbsp<?php echo $chen, '₽' ?></td>
     </tr>
     <tr>
       <td>&nbspЗатр</td>
       <td>&nbsp<?php echo $zatrat, '₽' ?></td>
     </tr>
     <tr>
       <td>&nbspАрт</td>
       <td>&nbsp<?php
        if ($moy == 1 && $gotov == 1) {
          $poprav = $mne/2;
          $art = (($chen - $zatrat)/2)-$poprav;
          echo $art, '₽';
        }
        if ($moy == 0 && $gotov == 1) {
          $art = ($chen - $zatrat)/2;
          echo $art, '₽';
        }
        ?></td>
     </tr>
     <tr>
       <td>&nbspАлек</td>
       <td>&nbsp<?php
       if ($moy == 1 && $gotov == 1) {
         $poprav = $mne/2;
         $alek = ($zatrat + (($chen - $zatrat)/2))-$poprav;
         echo $alek, '₽';
       }
       if ($moy == 0 && $gotov == 1) {
         $alek = $zatrat + (($chen - $zatrat)/2);
         echo $alek, '₽';
       }
       ?></td>
     </tr>

     <tr>
       <td>&nbspКонт</td>
       <td>&nbsp<?php echo $kont ?></td>
     </tr>
     <tr>
       <td>&nbspДост</td>
       <td>&nbsp<?php echo $dost, '&nbsp&nbsp&nbsp&nbsp'?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Копировать" OnClick="c(this, '<?php echo $dost ?>');" ></td>
     </tr>
     <tr>
       <td>&nbspСрок</td>
       <td>&nbsp<?php echo $srok ?></td>
     </tr>
     <tr>
       <td>&nbspГот</td>
       <td class="collor_td1">&nbsp<?php echo $gotov, '&nbsp&nbsp&nbsp&nbsp'; if ($gotov == 0): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Теперь да" OnClick="a(this, 'gotov');" ><?php endif; ?></td>
     </tr>
     <tr>
       <td>&nbspРасч</td>
       <?php if ($rasch == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $rasch, '&nbsp&nbsp&nbsp&nbsp'; if ($rasch == 0): ?><input type="button" class="but_izm" id="<?php echo $id ?>" value="Теперь да" OnClick="a(this, 'rasch');" ><?php endif; ?></td>
     </tr>
     <?php if ($moy == 1){ ?>
     <tr>
       <td>&nbspВит</td>
       <?php if ($kom == 0) {$collor_td = 1;} else {$collor_td = 2;}; ?>
       <td class="collor_td<?php echo $collor_td ?>">&nbsp<?php echo $mne, '₽' ?></td>
     </tr>
   <?php } ?>
   </table>
 </div>
<?php } endfor; $mysql->close(); ?>

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
function c(obj, copytext) {

  var id = obj.id;
  navigator.clipboard.writeText(copytext);

}
</script>
