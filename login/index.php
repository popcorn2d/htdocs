<?php
include_once("../config.php");
checkLoggedIn("no");
$title = "Гатчинский Педагогический Колледж";

if(isset($_POST["submit"]) and (!$_POST['hide'])) {
  field_validator("login name", $_POST["login"], "alphanumeric", 4, 15);
  field_validator("password", $_POST["password"], "string", 4, 100);
  if($messages){
    doIndex();
    exit;
  }

    if( !($row = checkPass($_POST["login"], md5($_POST["password"]))) ) {
        $messages[]="Неверная пара логин/пароль";
    }

  if($messages){
    doIndex();
    exit;
  }

  cleanMemberSession($row["login"], $row["password"]);

header("Location: /cp");
} else {
  doIndex();
}
function doIndex() {
  global $messages;
  global $title;
?>
<html>
<head>
<title><?php print $title;?></title>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/media/css/main.css">
</head>
<body>
<div id="login_box">
<a href="../"><div id="logo_login_box"></div></a>
    <div id="login_form">
        <form action="<?php print $_SERVER["PHP_SELF"]; ?>" method="POST">
            <input type="text" name="login" value="<?php print isset($_POST["login"]) ? $_POST["login"] : "" ; ?>" maxlength="15" placeholder="Логин">
            <input type="password" name="password" value="" maxlength="15" placeholder="Пароль">
            <input type="text" class="hide" name="value" value="">
            <input name="submit" type="submit" value="Войти">
            <?php if($messages) { displayErrors($messages); } ?>
        </form>
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
<?php
}
?>