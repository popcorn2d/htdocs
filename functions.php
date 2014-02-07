<?php
function connectToDB() {
  global $link, $dbhost, $dbuser, $dbpass, $dbname;
  ($link = mysql_pconnect("$dbhost", "$dbuser", "$dbpass")) || die("Couldn't connect to MySQL");
  mysql_select_db("$dbname", $link) || die("Couldn't open db: $dbname. Error if any was: ".mysql_error() );
   mysql_set_charset('utf8');
}

// Tempalate

// Header
function getHeader() {

if(isset($_SESSION['login'])) {
  $navi = "Личный кабинет";
}
else {
  $navi = "Войти";
}
  echo <<<END
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
<script>
$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
</script>
</head>
<body>
  <div id="mainPage">
        <div id="cp">
            <a href="" id="button">Настройки</a>
            <a href="" id="button">Расписание</a>
            <a href="" id="button">Файлы</a>
            <a href="" id="button" class="disable" title="В разработке">Архив</a>
            <a href="" id="button" class="disable" title="В разработке">Урок</a>
            <a href="/login" id="button" class="right">$navi</a>
        </div>
      <div id="header">
      <div id="logo">
              <a href="/" id="title">Гатчинский Педагогический Колледж</a>
      </div>
            <div id="up-line"></div>
      </div>
END;
}

// Navigation

function getNav() {
  echo <<<END
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
END;
}

// Footer

function getFooter() {
  $revision = "Revision 0.0.30";
  echo <<<END
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
            <div id="copy"><a href="http://bozzylab.ru">BozzyLab Group</a>  &copy; 2013-2014 $revision <a href="/" class="right">Гатчинский Педагогический Колледж</a></div>
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
END;
}

function newUser($login, $password) {
  global $link;
  $query="INSERT INTO users (login, password) VALUES('$login', '$password')";
  $result=mysql_query($query, $link) or die("Died inserting login info into db.  Error returned if any: ".mysql_error());
  return true;
}

function displayErrors($messages) {
  print("<b>Возникли следующие ошибки:</b>\n<ul>\n");
  foreach($messages as $msg){
  print("<li>$msg</li>\n");
  }
  print("</ul>\n");
}

function checkLoggedIn($status){
  switch($status){
    case "yes":
      if(!isset($_SESSION["loggedIn"])){
        header("Location: /");
        exit;
      }
      break;
    case "no":
      if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true ){
        header("Location: /cp");
      }
      break;
  }
  return true;
}

function checkPass($login, $password) {
  global $link;
  $query="SELECT login, password FROM users WHERE login='$login' and password='$password'";
  $result=mysql_query($query, $link)
    or die("checkPass fatal error: ".mysql_error());

  if(mysql_num_rows($result)==1) {
    $row=mysql_fetch_array($result);
    return $row;
  }
  return false;
}

function cleanMemberSession($login, $password) {
  $_SESSION["login"]=$login;
  $_SESSION["password"]=$password;
  $_SESSION["loggedIn"]=true;
}

function flushMemberSession() {
  unset($_SESSION["login"]);
  unset($_SESSION["password"]);
  unset($_SESSION["loggedIn"]);
  session_destroy();
  return true;
}

function field_validator($field_descr, $field_data, $field_type, $min_length="", $max_length="", $field_required=1) {

  global $messages;

  if(!$field_data && !$field_required){ return; }

  $field_ok=false;

  $email_regexp="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|";
  $email_regexp.="(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$";

  $data_types=array(
    "email"=>$email_regexp,
    "digit"=>"^[0-9]$",
    "number"=>"^[0-9]+$",
    "alpha"=>"^[a-zA-Z]+$",
    "alpha_space"=>"^[a-zA-Z ]+$",
    "alphanumeric"=>"^[a-zA-Z0-9]+$",
    "alphanumeric_space"=>"^[a-zA-Z0-9 ]+$",
    "string"=>""
  );

  if ($field_required && empty($field_data)) {
    $messages[] = "Поле $field_descr является обезательным";
    return;
  }

  if ($field_type == "string") {
    $field_ok = true;
  } else {
    $field_ok = ereg($data_types[$field_type], $field_data);
  }

  if (!$field_ok) {
    $messages[] = "Пожалуйста введите нормальный $field_descr.";
    return;
  }

  if ($field_ok && ($min_length > 0)) {
    if (strlen($field_data) < $min_length) {
      $messages[] = "$field_descr должен быть не короче $min_length символов.";
      return;
    }
  }

  if ($field_ok && ($max_length > 0)) {
    if (strlen($field_data) > $max_length) {
      $messages[] = "$field_descr не должен быть длиннее $max_length символов.";
      return;
    }
  }
}
?>