<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$tovar = $_POST['tovar'];
$user_name = $_POST['user_name'];
$user_tel = $_POST['user_tel'];
$spossvaz = $_POST['spossvaz'];
$contact = $_POST['contact'];
$grav = $_POST['grav'];
$message = $_POST['message'];
$dost = $_POST['dost'];

//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1313257261:AAFfXerzo8FXSlyTu02jGu9nIFSvWx04CoM";

//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-485464059";

//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  'Товар: ' => $tovar,
  'Гравировка: ' => $grav,
  'Доставка: ' => $dost,
  'Имя: ' => $user_name,
  'Номер: ' => $user_tel,
  'Способ связи: ' => $spossvaz,
  'Контакты: ' => $contact,
  'Сообщение: ' => $message
);

//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  header("Location: /thanks/thanks.php");
}
?>
