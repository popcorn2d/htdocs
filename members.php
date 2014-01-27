<?php
header("Content-Type: text/html; charset=UTF-8");
include_once("config.php");
# Версия сайта
$revision = "0.0.20";

checkLoggedIn("yes");
#print("<b>".$_SESSION["login"]."</b>! Добро пожаловать<br>\n");
$login = $_SESSION["login"];
$query = mysql_query("SELECT * FROM users WHERE login='$login' LIMIT 1");
while ($result = mysql_fetch_array($query)) {
	// User
	$login = $result['login'];
	$uid = $result['id'];
	$real_name = $result['real_name'];
	$group = $result['group'];
	$token = $result['token'];
	$hour_all = $result['hour_all'];
	$hour_green = $result['hour_green'];
	$hour_red = $hour_all - $hour_green;
}
echo
<<<END
<html>
    <head>
        <title>GPC CP</title>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	  	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 		<script>
		  $(function() {
		    $(".dropDownMark").click(function() {
		      $(this).find(".dropDownContent").toggleClass( "show");
		    });
		  });
  </script>
    </head>
    <body>
<div id="page">
        <div id="content">
            <div id="userArea">
                <span>$real_name</span>
                <span>(UID: $uid)</span>
                <span>Группа: $group</span>
                <span class="right"><a href="logout.php" id="button">Выйти</a></span>
            </div>
            <div id="leftCol">
                <div id="skipLesson">
                    <div id="skipLessonTotal">
                        <span class="number">$hour_all</span>
                        <span class="text">часов пропусков</span>
                    </div>
                    <div id="skipLessonDetail">
                        <div id="skipLessonDetailGreen">
                            <p class="skipLessonDetailText">$hour_green</p>
                        </div>
                        <div id="skipLessonDetailRed">
                            <p class="skipLessonDetailText">$hour_red</p>
                        </div>
                    </div>
                    <div id="resume">
                        <div class="titleBox">Лекции</div>
END;
$resume = mysql_query("SELECT * FROM `resume` WHERE `group`=$group") or die(mysql_error());
while ($result_resume = mysql_fetch_array($resume)) {
		$links = "http://".$result_resume['links'];
		$subject_id = $result_resume['subject_id'];
		$group = $result_resume['group'];

		if($subject_id == 1)
		{
			$subject_id = "Физика";
		}
		elseif ($subject_id == 2)
		{
			$subject_id = "Информатика";
		}
		$num_rows = mysql_num_rows($resume);
		$x=0;
			do
			{
				$resumeContent =  "<a href=$links target='_blank'>$subject_id</a><br>";
			}
			while ($x++>$num_rows);

			if($num_rows == 0)
			{
				$resumeContent = "Null";
				echo $resumeContent;
			}
			else
			{
				echo $resumeContent;
			}
}
echo <<<END
                    </div>
                </div>
            </div>
            <div id="rightCol">
                <div id="listOfLesson">
                    <div class="titleBox">Список предметов</div>
                    <div id="listOfLessonContent">
END;
$mark = mysql_query("SELECT * FROM mark WHERE uid=$uid") or die(mysql_error());
while ($mark_resume = mysql_fetch_array($mark)) {
		$num_rows = mysql_num_rows($mark);
		$marks = $mark_resume['marks'];
		$subject_id = $mark_resume['subject_id'];
		$x=0;
		switch ($subject_id) {
			case '1': // Русский язык
				$subject_id = "Русский язык";
				break;
			#

		}
			do
			{
					// Выводим таблицу с предметом
					// $table = mysql_field_table($mark, $x);
					// Переводим данные из таблицы в названия предметов

					// Выводим данные из таблицы с предметом
					$markContent =  "
					<div id='listOfLessonGroup' class='green'>
						<div class='nameLesson'>$subject_id</div>
						<div class='markLesson dropDownMark'>Оценки
							<div class='dropDownContent'>$marks</div>
						</div>
					</div>";
				}
				while ($x++>$num_rows);
			}
		// Вывод конечных данных
		echo $markContent;
echo <<<END
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
			<a href="http://bozzylab.ru">BozzyLab</a> 2013 &copy; Revision: $revision <a href="/" class="right">Гатчинский Педагогический Колледж</a>
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
END;
?>