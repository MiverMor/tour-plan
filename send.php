<?php
// Файлы phpmailer

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];


// Формирование самого письма
$title = "Новое обращение Best Tour Plan";
$body = "
<h2>Новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение</b><br>$message
";

// Настроки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
  $mail->isSMTP();
  $mail->CharSet = 'UTF-8';
  $mail->SMTPAuth   = true;
  // $mail->SMTPDebug = 2;
  $mail->Debagoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

  // Настройки вашей почты
  $mail->Host   = 'smtp.mail.ru';  // Адрес SMTP сервера вашей почты
  $mail->Username   = 'testacc0unt.ivan@mail.ru';       // Логин на почте
  $mail->Password   = '47QQ6SDwkypBkesDRtvz';    // Пароль на почте
  $mail->SMTPSecure = 'ssl';         // шифрование ssl
  $mail->Port   = 465;               // порт подключения
  $mail->setFrom('testacc0unt.ivan@mail.ru', 'Иван Тест');    // от кого

  // Получаетль письма
  $mail->addAddress('Mordyashev-I-A@yandex.ru'); // кому

  // Отправка сообщения 
  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;

  // Проверяем отправленность сообщения 
  if ($mail->send()) {$result = "success";}
  else {$result = "error";}

} catch(Exception $e) {
  $result = "error";
  $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thankyou.php');




?>