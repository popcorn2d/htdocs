<?php 
header("Content-Type: text/html; charset=UTF-8");
include_once("config.php");
?>
<?php getHeader(); ?>
<?php getNav() ?>
<?php

if (!isset($_GET['id'])) {
	header("Location: /");
} else {
	$page_id = mysql_real_escape_string(intval($_GET['id']));

	$query = mysql_query("SELECT * FROM `page` WHERE `page_id`=$page_id") or die(mysql_error());
	while ($result = mysql_fetch_array($query)) {
			$num_rows = mysql_num_rows($query);
			$page_content = $result['page_content'];
			$page_title = $result['page_title'];

			$content = "<h1>$page_title</h1><div>$page_content</div>";
	}
			if(!isset($num_rows))
				{
					header('Status: 404 Not Found');
					header('HTTP/1.1 404 Not Found');
					echo "<h1>Страница не найдена. <a href='/'>На главную</a></h1>";
				}
				else
				{
					echo $content;
				}
}
?>
<?php getFooter(); ?>