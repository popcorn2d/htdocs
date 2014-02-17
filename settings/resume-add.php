<?php
header("Content-Type: text/html; charset=UTF-8");
include_once("../config.php");
if ($_SESSION['token'] === "user" or $_SESSION['token'] === "teacher" or (!isset($_SESSION['login']))) {
	header("Location: /login");
}
else if ($_SESSION['token'] === "admin")
{
	getHeader();
	getNav();
	getAdminNav();
				echo "
				<form action='/settings/resume-add.php' method='POST' style='width:310px; display:inline-table;'>
				<input type='text' name='subject' placeholder='Предмет' value=''>
				<input type='text' name='links' placeholder='Ссылка на документ' value=''>
				<input type='text' name='groups' placeholder='Группа' value=''>
				<input type='submit' value='Добавить'>
				</form>";
	getFooter();
}

?>