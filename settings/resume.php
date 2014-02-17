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
		$query = mysql_query("SELECT * FROM `resume`") or die(mysql_error());
		while ($result = mysql_fetch_array($query)) {
			$num_rows = mysql_num_rows($query);
			$subject_id = $result['subject_id'];
			$groups = $result['groups'];
			$links = $result['links'];
			$x=0;
			do
			{
				echo "
				<form action='/settings/resume.php' method='POST' style='width:310px; display:inline-table;'>
				<input type='text' name='subject' placeholder='Предмет' value='$subject_id'>
				<input type='text' name='links' placeholder='Ссылка на документ' value='$links'>
				<input type='text' name='groups' placeholder='Группа' value='$groups'>
				<input type='submit' value='Обновить'>
				</form>";
			}
			while ($x++>$num_rows);
			}
	getFooter();
}

?>