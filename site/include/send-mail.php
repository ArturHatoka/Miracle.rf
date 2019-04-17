<?php
$phone = $_POST['phone'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$comment = htmlspecialchars($comment);

$phone = urldecode($phone);
$email = urldecode($email);
$comment = urldecode($comment);

$phone = trim($phone);
$email = trim($email);
$comment = trim($comment);

if (mail("kazan@miracletour.com", "Заявка с сайта",
    "E-mail: ".$email. "\nТелефон: ".$phone. "\nСообщение: \n".$comment,
    "From: info@miracletour.ru \r\n"))
{
    header("Location: /#endthx");
} else {
    echo "при отправке сообщения возникли ошибки";
}