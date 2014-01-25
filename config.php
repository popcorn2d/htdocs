<?php
# Запуск сессии
session_start();
# Служит для отладки, показывает все ошибки, предупреждения и т.д.
error_reporting(E_ALL ^ E_DEPRECATED);
# Подключение файлов с функциями
include_once("functions.php");
# В этом массиве далее мы будем хранить сообщения системы, т.е. ошибки.
$messages=array();
# Данные для подключения к БД
$dbhost="localhost";
$dbuser="root";
$dbpass="bitnami";
$dbname="cp";
# Вызываем функцию подключения к БД
connectToDB();
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
?>