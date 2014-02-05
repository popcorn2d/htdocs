<?php 
header("Content-Type: text/html; charset=UTF-8");
include_once("config.php");
?>
<html>
<head>
<meta charset="UTF-8">
<title>Гатчинский Педагогический Колледж им. К. Д. Ушинского</title>
<script src="//use.edgefonts.net/pt-sans.js"></script>
<link rel="stylesheet" href="/media/css/main.css">
<link rel="stylesheet" href="media/css/colorbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="media/js/jquery.js"></script>
<script type="text/javascript" src="media/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="media/js/jquery.bgpos.js"></script>
<script type="text/javascript">
$(function() {
                var current = 0;
                
                var loaded  = 0;
                for(var i = 1; i <4; ++i)
                    $('<img />').load(function(){
                        ++loaded;
                        if(loaded == 3){
                            $('#bg1,#bg2,#bg3').mouseover(function(e){
                                
                                var $this = $(this);
                                if($this.parent().index() == current)
                                    return;

                                var item = e.target.id;
                                
                                if(item == 'bg1' || current == 2)
                                    $('#menu .sub'+parseInt(current+1)).stop().animate({backgroundPosition:"(-333px 0)"},300,function(){
                                        $(this).find('li').hide();
                                    });
                                else
                                    $('#menu .sub'+parseInt(current+1)).stop().animate({backgroundPosition:"(320px 0)"},300,function(){
                                        $(this).find('li').hide();
                                    });

                                if(item == 'bg1' || current == 2){
                                    $('#menu > li').animate({backgroundPosition:"(-780px 0)"},0).removeClass('bg1 bg2 bg3').addClass(item);
                                    move(1,item);
                                }
                                else{
                                    $('#menu > li').animate({backgroundPosition:"(780px 0)"},0).removeClass('bg1 bg2 bg3').addClass(item);
                                    move(0,item);
                                }
                                if(current == 2 && item == 'bg1'){
                                    $('#menu .sub'+parseInt(current)).stop().animate({backgroundPosition:"(-333px 0)"},300);
                                }
                                if(current == 0 && item == 'bg3'){
                                    $('#menu .sub'+parseInt(current+2)).stop().animate({backgroundPosition:"(320px 0)"},300);
                                }
                                current = $this.parent().index();
                                $('#menu .sub'+parseInt(current+1)).stop().animate({backgroundPosition:"(0 0)"},300,function(){
                                    $(this).find('li').fadeIn();
                                });
                            });
                        }   
                    }).attr('src', 'media/images/news/'+i+'.jpg');
                function move(dir,item){
                    if(dir){
                        $('#bg1').parent().stop().animate({backgroundPosition:"(0 0)"},200);
                        $('#bg2').parent().stop().animate({backgroundPosition:"(-320px 0)"},100);
                        $('#bg3').parent().stop().animate({backgroundPosition:"(-640px 0)"},400,function(){
                            $('#menuWrapper').removeClass('bg1 bg2 bg3').addClass(item);
                        });
                    }
                    else{
                        $('#bg1').parent().stop().animate({backgroundPosition:"(0 0)"},400,function(){
                            $('#menuWrapper').removeClass('bg1 bg2 bg3').addClass(item);
                        });
                        $('#bg2').parent().stop().animate({backgroundPosition:"(-320px 0)"},300);
                        $('#bg3').parent().stop().animate({backgroundPosition:"(-640px 0)"},200);
                    }
                }
            });
</script>
<style type="text/css">
.bg1 {
background-image:url(media/images/news/1.jpg);
}

.bg2 {
background-image:url(media/images/news/2.jpg)
}

.bg3 {
background-image:url(media/images/news/3.jpg)
}

#mainPage {
    width: 960px !important;
}
</style>
</head>
<body>
	<div id="mainPage">
        <div id="cp">
            <a href="" id="button">Настройки</a>
            <a href="" id="button">Расписание</a>
            <a href="" id="button">Файлы</a>
            <a href="" id="button" class="disable" title="В разработке">Архив</a>
            <a href="" id="button" class="disable" title="В разработке">Урок</a>
            <a href="/login" id="button" class="right"><?php if(isset($_SESSION['login'])) {echo "Личный кабинет";}else{echo "Войти";}?></a>
        </div>
    	<div id="header">
			<div id="logo">
            	<a href="/" id="title">Гатчинский Педагогический Колледж</a>
            </div>
            <div id="up-line"></div>
        	<div id="navigation">
        	<li>
            	<a href="#"><div>О колледже</div></a>
            	<ul>
            		<a href="#"><li>Очень очень длинная запись</li></a>
            		<a href="#"><li>Test</li></a>
            		<a href="#"><li>Test</li></a>
            		<a href="#"><li>Test</li></a>
            	</ul>
            </li>
                <a href="#"><div>Абитуриенту</div></a>
                <a href="#"><div>Студенту</div></a>
                <a href="#"><div>Базовая школа</div></a>
                <a href="#"><div>Библиотека</div></a>
                <a href="#"><div>Фото галерея</div></a>
                <a href="#"><div>Документы</div></a>
                <a href="#"><div>Контакты</div></a>
            </div>
        </div>
        <div id="content">
                    <div id="menuWrapper" class="menuWrapper bg1">
                <ul class="menu" id="menu">
                    <li class="bg1" style="background-position:0 0;">
                        <a id="bg1" href="#">Фестиваль</a>
                        <ul class="sub1" style="background-position:0 0;">
                            <li><a href="#">Фотографии</a></li>
                            <li><a href="#">Отчёт о мероприятии</a></li>
                        </ul>
                    </li>
                    <li class="bg1" style="background-position:-320px 0px;">
                        <a id="bg2" href="#">День рождения</a>
                        <ul class="sub2" style="background-position:-333px 0;">
                            <li><a href="#">Фотографии</a></li>
                            <li><a href="#">Отчёт о мероприятии</a></li>
                        </ul>
                    </li>
                    <li class="last bg1" style="background-position:-640px 0px;">
                        <a id="bg3" href="#">Футбол</a>
                        <ul class="sub3" style="background-position:-333px 0;">
                            <li><a href="#">Фотокарточки</a></li>
                            <li><a href="#">О празднике</a></li>
                            <li><a href="#">Отчёт о мероприятии</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id="footer">
            <div id="footer-content">
            	<div>
                	<span class="footer-title">Аккаунт</span>
                    	<li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                </div>
                <div>
                	<span class="footer-title">Аккаунт</span>
                    	<li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                </div>
                <div>
                	<span class="footer-title">Аккаунт</span>
                    	<li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                </div>
                <div>
                	<span class="footer-title">Аккаунт</span>
                    	<li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                </div>
                <div>
                	<span class="footer-title">Аккаунт</span>
                    	<li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                </div>
                <div>
                	<span class="footer-title">Аккаунт</span>
                    	<li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                        <li><a href="#">Настройки</a></li>
                </div>
            </div>
            <div id="line"></div>
            <div id="copy"><a href="http://bozzylab.ru">BozzyLab Group</a>  &copy; 2013-2014</div>
        </div>
    </div>
    <!-- Yandex.Metrika informer -->
<a href="http://metrika.yandex.ru/stat/?id=23409682&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/23409682/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0; display:none;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:23409682,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23409682 = new Ya.Metrika({id:23409682,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    trackHash:true});
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
<noscript><div><img src="//mc.yandex.ru/watch/23409682" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>