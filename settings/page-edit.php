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
	$getPage = mysql_real_escape_string($_GET['id']);
	if($getPage === '') {
		header("Location: /settings");
	} else {
		$query = mysql_query("SELECT * FROM `page` WHERE page_id='$getPage'") or die(mysql_error());
		while ($result = mysql_fetch_array($query)) {
			$num_rows = mysql_num_rows($query);
			$page_id = $result['page_id'];
			$page_content = $result['page_content'];
			$page_title = $result['page_title'];
			$num_rows = mysql_num_rows($query);
			$x=0;
			do
			{
				echo "
				<form action='/settings/page-edit.php?id=$page_id' method='POST'>
				<input type='text' placeholder='Заголовок страницы' value='$page_title'>
				<textarea placeholder='Содержание страницы' name='page_content'>$page_content</textarea>
				<input type='text' name='linkindex1' placeholder='Ссылка 1 на главной странице'>
				<input type='text' name='linkindex2' placeholder='Ссылка 2 на главной странице'>
				<input type='text' name='linkindex3' placeholder='Ссылка 3 на главной странице'>
				<input type='text' name='backgroundimage' placeholder='Ссылка на подложку'>
				<input type='submit' value='Обновить'>
				</form>";
			}
			while ($x++>$num_rows);
			}
		}
	getFooter();
}

?>