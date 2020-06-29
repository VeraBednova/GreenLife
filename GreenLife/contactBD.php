<?php

$host = "locolhost";
$BDname = "order";
$user = "root";
$pass = "root";
// подключение к базе данных
$order = mysqli_connect($BDhost,$user,$pass,$BDname);
if ($order->connect_error) {
die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//отправка вопроса на почту и сохранение имени и email
$name = $_POST['name']; 
$email = $_POST['Email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
mail("bednova.vera@mail.ru", "$subject", "$message","From: $email \r\n");// отправка сообщения на почту
$sql = mysqli_query($order, "INSERT INTO klients (name, Email) VALUES ('{$_POST['name']}', '{$_POST['email']}')");

if ($sql) {
echo '<p>Заявка отправлена</p><br><a href="index.php">Обратно</a>';
} 
else {
echo '<p>NO: ' . mysqli_error($order) . '</p>';
}