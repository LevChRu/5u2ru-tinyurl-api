<?php
$url = trim($_GET['url']); // Отправляем скрипту GET-запрос с длинной ссылкой (пример: sample-api.php?url=test.ru)
if(!preg_match("#^https?://#iU",$url)) $url= "http://".$url;

if (!$url) { header("Location: ". $_SERVER['PHP_SELF'] . ""); }
else { $longurl = urlencode($url); }
$tinyurl = file_get_contents("http://5u2.ru/api.php?url=$longurl");
echo $tinyurl;
?>
