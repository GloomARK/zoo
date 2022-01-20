<?php

//--------------------------Настройки подключения к БД-----------------------
$db_host = 'std-mysql.ist.mospolytech.ru';
$db_user = 'std_1530_zoo_data'; //имя пользователя совпадает с именем БД
$db_password = 'Sretfeur'; //пароль, указанный при создании БД
$database = 'std_1530_zoo_data'; //имя БД, которое было указано при создании
$conn = mysqli_connect($db_host, $db_user, $db_password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>