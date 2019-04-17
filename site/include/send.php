<?php
$user = $_POST['user'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$bdate = $_POST['bdate'];
$ps = $_POST['ps'];
$ps_date = $_POST['ps_date'];
$data = $_POST['data'];
$comment = $_POST['comment'];
$tour = $_POST['tour'];

$user = htmlspecialchars($user);
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$firstname = htmlspecialchars($firstname);
$lastname = htmlspecialchars($lastname);
$bdate = htmlspecialchars($bdate);
$ps = htmlspecialchars($ps);
$ps_date = htmlspecialchars($ps_date);
$data = htmlspecialchars($data);
$comment = htmlspecialchars($comment);
$tour = htmlspecialchars($tour);

$user = urldecode($user);
$name = urldecode($name);
$phone = urldecode($phone);
$email = urldecode($email);
$firstname = urldecode($firstname);
$lastname = urldecode($lastname);
$bdate = urldecode($bdate);
$ps = urldecode($ps);
$ps_date = urldecode($ps_date);
$data = urldecode($data);
$comment = urldecode($comment);
$tour = urldecode($tour);

$user = trim($user);
$name = trim($name);
$phone = trim($phone);
$email = trim($email);
$firstname = trim($firstname);
$lastname = trim($lastname);
$bdate = trim($bdate);
$ps = trim($ps);
$ps_date = trim($ps_date);
$data = trim($data);
$comment = trim($comment);
$tour = trim($tour);

if (mail("kazan@miracletour.com", "Заказ с сайта",
    "Тур: ".$tour. "
Выбрано: ".$user. "
Заказчик: ".$name. "
Телефон: ".$phone. "
E-mail: ".$email. "
Данные туриста: 
Имя - ".$firstname. "
Фамилия - ".$lastname. "
День рождения - ".$bdate. "
Номер паспорта - ".$ps. "
Срок действия - ".$ps_date. "
Дата тура - ".$data. "
Комментарий: 
".$comment,
    "From: info@miracletour.ru \r\n"))
{
    header("Location: /#endthx");
} else {
    echo "при отправке сообщения возникли ошибки";
}