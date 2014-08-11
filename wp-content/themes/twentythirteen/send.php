<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->setLanguage('ru', '/phpmailer/language/phpmailer.lang-ru.php');

$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

$mail->From = "no-reply@snip-app.com";
$mail->FromName = "no-reply";
$mail->addAddress("info@snip-app.com");

$mail->WordWrap = 100;

$mail->Subject = "Обратная связь";
$mail->Body = "Имя: $name\nEmail: $email\nСообщение: $message";


if(!$mail->send()) {
	echo 'При отправке сообщения произошла ошибка: '.$mail->ErrorInfo;
	exit;
}

echo 'Сообщение отправлено';
?>
