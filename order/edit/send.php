<?php

//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$id = filter_var($_POST['id'],
FILTER_SANITIZE_STRING);
$tov = filter_var($_POST['tov'],
FILTER_SANITIZE_STRING);
$grav = filter_var($_POST['grav'],
FILTER_SANITIZE_STRING);
$chen = filter_var($_POST['chen'],
FILTER_SANITIZE_STRING);
$kont = filter_var($_POST['kont'],
FILTER_SANITIZE_STRING);
$dost = filter_var($_POST['dost'],
FILTER_SANITIZE_STRING);
$srok = filter_var($_POST['srok'],
FILTER_SANITIZE_STRING);
$oplat = filter_var($_POST['oplat'],
FILTER_SANITIZE_STRING);
$naklad = filter_var($_POST['naklad'],
FILTER_SANITIZE_STRING);
$kom = filter_var($_POST['kom'],
FILTER_SANITIZE_STRING);
$gotov = filter_var($_POST['gotov'],
FILTER_SANITIZE_STRING);
$mne = filter_var($_POST['mne'],
FILTER_SANITIZE_STRING);
$rasch = filter_var($_POST['rasch'],
FILTER_SANITIZE_STRING);
$zatrat = filter_var($_POST['zatrat'],
FILTER_SANITIZE_STRING);

require "../login/in.php";
$mysql->query("UPDATE `zakaz` SET `tov` = '$tov' WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `grav` = '$grav' WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `chen` = '$chen' WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `kont` = '$kont' WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `dost` = '$dost' WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `srok` = '$srok' WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `oplat` = $oplat WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `naklad` = $naklad WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `kom` = $kom WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `gotov` = $gotov WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `mne` = $mne WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `rasch` = $rasch WHERE ID = $id ");
$mysql->query("UPDATE `zakaz` SET `zatrat` = $zatrat WHERE ID = $id ");

$mysql->close();

//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
  header("Location: ../index.php");
?>
