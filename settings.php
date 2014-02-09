<?php
header("Content-Type: text/html; charset=UTF-8");
include_once("config.php");
if ($_SESSION['token'] === "user" or $_SESSION['token'] === "teacher" or (!isset($_SESSION['login']))) {
	header("Location: /cp");
}
else if ($_SESSION['token'] === "admin")
{
	getHeader();
	getNav();
	echo '<div id="content">Настройки</div>';
	getFooter();
}
?>