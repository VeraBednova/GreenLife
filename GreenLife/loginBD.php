<?php
// константы базы данных
$host = "locolhost";
$BDname = "login";
$user = "root";
$pass = "root";
// подключение к базе данных
$user = mysqli_connect($BDhost,$user,$pass,$BDname);
if ($user->connect_error) {
die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
//регистрация пользователя
$email = $_POST[''];
$password = $_POST['password'];
$sql = mysqli_query($user, "INSERT INTO user (email,password) VALUES ('{$_POST['email']}', '{$_POST['password']}')");
if ($sql) {
echo '<p>Запись отправлена</p><br><a href="login.php">Обратно</a>';
} else {
echo '<p>Неправильно' . mysqli_error($session) . '</p>';
}