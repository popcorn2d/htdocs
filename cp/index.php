<?php
header("Content-Type: text/html; charset=UTF-8");
include_once("../config.php");
# Версия сайта
$revision = "0.0.29";
# Заголовок
$title = "Гатчинский Педагогический Колледж";
checkLoggedIn("yes");
$login = $_SESSION["login"];
$query = mysql_query("SELECT * FROM users WHERE login='$login' LIMIT 1");
while ($result = mysql_fetch_array($query)) {
	$login = $result['login'];
	$uid = $result['id'];
	$real_name = $result['real_name'];
	$group = $result['groups'];
	$token = $result['token'];
	$hour_all = $result['hour_all'];
	$hour_green = $result['hour_green'];
	$hour_red = $hour_all - $hour_green;
}
echo
<<<END
<html>
    <head>
        <title>$title</title>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/media/css/main.css">
	  	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
 		<script>
		  $(function() {
		    $(".dropDownMark").click(function() {
		      $(this).find(".dropDownContent").toggleClass( "show");
		    });
		  });
  		</script>
	<script>
var hour_all = "$hour_all";
var hour_green = "$hour_green";
var hour_red = "$hour_red";
green = (hour_green/(hour_all * 0.01))*9.4;
red = (hour_red/(hour_all * 0.01))*9.4;

if(green > 0) {
$(document).ready(function() {
    $('#skipLessonDetailGreen').css('width', green);
    $('#skipLessonDetailRed').css('width', red);
});
}
if(red === 0)
{
	$(document).ready(function() {
    $('#skipLessonDetailRed').addClass('hide');
});
}

device.height
</script>
    </head>
    <body>
<div id="page">
<div id="userArea">
                <span>$real_name</span>
                <span>(UID: $uid)</span>
                <span>Группа: $group</span>
                <span>Токен: $token</span>
                <span class="right"><a href="../logout.php" id="button">Выйти</a></span>
            </div>
        <div id="content">
END;
if($token == 'user') {
	echo
<<<END
            <div id="user">
                <div id="skipLesson">
                    <div id="skipLessonTotal">
                        <span class="number">$hour_all</span>
                        <span class="text">часов пропусков</span>
                    </div>
                    <div id="skipLessonDetail" class="center">
                        <div id="skipLessonDetailGreen" class="green">
                            <p class="skipLessonDetailText">$hour_green</p>
                        </div>
                        <div id="skipLessonDetailRed" class="red">
                            <p class="skipLessonDetailText">$hour_red</p>
                        </div>
                    </div>
            	</div>
                </div>
            <div id="mark">
                <div id="listOfLesson">
                    <div class="titleBox center">Список предметов</div>
                    <div id="listOfLessonContent">
END;
$mark = mysql_query("SELECT * FROM mark WHERE uid=$uid") or die(mysql_error());
while ($mark_resume = mysql_fetch_array($mark)) {
		$num_rows = mysql_num_rows($mark);
		$marks = $mark_resume['marks'];
		$subject_id = $mark_resume['subject_id'];
		$comment = $mark_resume['comment'];
		$x=0;
		switch ($subject_id) {
			# Группа 511
			case '1': // Русский язык
				$subject_id = "Русский язык";
				break;

			case '2': // Русский язык
				$subject_id = "Литература";
				break;

			case '3': // Русский язык
				$subject_id = "Отечественная история";
				break;
		}
			do
			{
					// Выводим таблицу с предметом
					// $table = mysql_field_table($mark, $x);
					// Переводим данные из таблицы в названия предметов

					// Выводим данные из таблицы с предметом
					$markContent =  "
					<div id='listOfLessonGroup' class='green'>
						<div>$subject_id</div>
						<div class='markLesson dropDownMark center'>Оценки
							<div class='dropDownContent'>$marks<br><p class='left'>$comment</p></div>
						</div>
					</div>";
				}
				while ($x++>$num_rows);
				if(!isset($num_rows))
			{
				echo "Нет данных";
			}
			else
			{
				echo $markContent;
			}
	}
		// Вывод конечных данных
echo <<<END
                    </div>
                </div>
            </div>
            <div id="resume" class="">
                        <div class="titleBox center">Лекции</div>
END;
$resume = mysql_query("SELECT * FROM `resume` WHERE `groups`=$group") or die(mysql_error());
while ($result_resume = mysql_fetch_array($resume)) {
		$links = "http://".$result_resume['links'];
		$subject_id = $result_resume['subject_id'];
		$group = $result_resume['groups'];
		$num_rows = mysql_num_rows($resume);
		$x=0;
		switch ($subject_id) {
			# Группа 511
			case '1': // Русский язык
				$subject_id = "Русский язык";
				break;

			case '2': // Русский язык
				$subject_id = "Литература";
				break;

			case '3': // Русский язык
				$subject_id = "Отечественная история";
				break;
		}
			do
			{
				$resumeContent =  "<a href='$links' id='button' class='center' target='_blank'>$subject_id</a>";
			}
			while ($x++>$num_rows);
}
		if(!isset($num_rows))
			{
				echo "Нет данных";
			}
			else
			{
				echo $resumeContent;
			}
echo <<<END
                    </div>
        </div>
END;
}
elseif($token == 'admin') {
	echo "<div id='listOfLessonGroup' class='green'><div>Список студентов</div><div class='markLesson dropDownMark'>";
$query = mysql_query("SELECT * FROM users LIMIT 10") or die(mysql_error());
while ($mark_resume = mysql_fetch_array($query)) {
		$num_rows = mysql_num_rows($query);
		$id = $mark_resume['id'];
		$hour_all = $mark_resume['hour_all'];
		$hour_green = $mark_resume['hour_green'];
		$real_name = $mark_resume['real_name'];
		$groups = $mark_resume['groups'];
		$x=0;
			do
			{
					// Выводим данные из таблицы с пользователями
					$markContent =  "
					<div class='dropDownContent'>$real_name<br>
					<input type='text' value='$id' placeholder='Идентификатор'>
					<input type='text' value='$hour_all' placeholder='Всего пропусков'>
					<input type='text' value='$hour_green' placeholder='По уважительной'>
					<input type='text' value='$real_name' placeholder='ФИО'>
					<input type='text' value='$groups' placeholder='Группа'>
					</div>";
				}
				while ($x++>$num_rows);
				if(!isset($num_rows))
			{
				echo "Нет данных";
			}
			else
			{
				echo $markContent;
			}
	}
echo "</div></div>";
}
mysql_close();
?>
<div id="footer">
			<a href="http://bozzylab.ru">BozzyLab Group</a>  &copy; 2013-2014 Revision: <?php echo $revision;?> <a href="/" class="right">Гатчинский Педагогический Колледж</a>
</div>
</div>
    <!-- Yandex.Metrika informer -->
<a href="http://metrika.yandex.ru/stat/?id=23663236&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/23663236/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0; display:none;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:23663236,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23663236 = new Ya.Metrika({id:23663236,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23663236" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>