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
	echo <<<END
	<form action='/settings/page-add.php' method='POST'>
		<input type='text' name='page_title' placeholder='Заголовок страницы'>
		<textarea name='page_content' placeholder='Содержание страницы'></textarea>
		<input type='text' name='linkindex1' placeholder='Ссылка 1 на главной странице'>
		<input type='text' name='linkindex2' placeholder='Ссылка 2 на главной странице'>
		<input type='text' name='linkindex3' placeholder='Ссылка 3 на главной странице'>
		<input type='text' name='backgroundimage' placeholder='Ссылка на подложку'>
		<input type='submit' value='Опубликовать'>
		</form>
END;
	getFooter();
}

?>