<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$day = filter_var(date( "d.m" ),
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
if ($_COOKIE['user'] == 'Vindie') {
  $moy = 1;
  $gotov = 0;
  $rasch = 0;
} else {
  $moy = 0;
  $oplat = 0;
  $naklad = 0;
  $kom = 0;
}

//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1313257261:AAFfXerzo8FXSlyTu02jGu9nIFSvWx04CoM";

//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-570429978";
$chat_id2 = "-393347023";

//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  'Новый заказ ',
  'Товар: ' => $tov,
  'Гравировка: ' => $grav,
  'Цена: ' => $chen,
  'Контакт: ' => $kont,
  'Доставка: ' => $dost,
  'Сроки: ' => $srok
);
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id2}&parse_mode=html&text={$txt}","r");
if ($_COOKIE['user'] == 'Vindie') {
  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
}

require "../login/in.php";
$mysql->query("INSERT INTO `zakaz` (`day`, `tov`, `grav`, `chen`, `kont`, `dost`, `srok`, `oplat`, `naklad`, `kom`, `moy`, `gotov`, `mne`, `rasch`, `zatrat`)
VALUES('$day', '$tov', '$grav', '$chen', '$kont', '$dost', '$srok', '$oplat', '$naklad', '$kom', '$moy', '$gotov', '$mne', '$rasch', '$zatrat')");

$mysql->close();

//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
  header("Location: ../index.php");
?>
