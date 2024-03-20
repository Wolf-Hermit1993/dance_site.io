<?php
// Получаем данные из формы
$name = $_POST['name'];
$phone = $_POST['phone'];

// Ваш API-ключ Telegram бота
$telegram_api_key = '6662725518:AAGlfErzXCTU7flpWfo7xiXjSqWm4D4OEY0';

// Чат-идентификатор группы в Telegram, куда будут отправляться уведомления
$chat_id = '-1002112155507';

// Сообщение для отправки в группу
$message = "Новая заявка на обратный звонок:\nИмя: $name\nНомер телефона: $phone";

// URL для отправки сообщения в Telegram
$telegram_url = "https://api.telegram.org/bot$telegram_api_key/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

// Отправляем запрос к API Telegram
$response = file_get_contents($telegram_url);

// Проверяем результат отправки
if ($response === false) {
    echo 'Ошибка при отправке заявки.';
} else {
    echo 'Заявка успешно отправлена.';
}
?>
