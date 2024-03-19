<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$massage = $_POST['message'];
$token = "6662725518:AAGlfErzXCTU7flpWfo7xiXjSqWm4D4OEY0";
$chat_id = "-1002112155507";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: success.html');
} else {
  echo "Error";
}
?>