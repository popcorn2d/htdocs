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

	$query = mysql_query("SELECT * FROM page") or die(mysql_error());
	while ($result = mysql_fetch_array($query)) {
			$num_rows = mysql_num_rows($query);
			$page_id = $result['page_id'];
			$page_content = $result['page_content'];
			$page_title = $result['page_title'];
			$x=0;
				do
				{
					echo "<li><a id='button' href='/page.php?id=$page_id' target='_blank' title='Откроется в новом окне'>$page_title</a> <a href='/settings/page-edit.php?id=$page_id' target='_blank'>Редактировать</a></li>";
				}
				while ($x++>$num_rows);
			}
				if(!isset($num_rows))
					{
						$settingsContent = "Нет данных";
					}
					else
					{
					}

	getFooter();
}
?>