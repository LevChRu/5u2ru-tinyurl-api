<?php
$url = trim($_POST['url']);
if(!preg_match("#^https?://#iU",$url)) $url= "http://".$url;

if (!$url) { header("Location: ". $_SERVER['PHP_SELF'] . ""); }
else { $longurl = urlencode($url); }
$request = "http://5u2.ru/API/write/get?url=$longurl";
$json = file_get_contents($request);
$obj = json_decode($json);
$newurl = $obj->data->url;
if($newurl) { echo $newurl; }
?>
